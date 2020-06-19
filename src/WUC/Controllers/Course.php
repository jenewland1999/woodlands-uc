<?php

namespace WUC\Controllers;

use CupOfPHP\DatabaseTable;

class Course
{
    private $coursesTable;
    private $get;
    private $post;

    public function __construct(
        $coursesTable,
        $get,
        $post
    ) {
        $this->coursesTable = $coursesTable;
        $this->get = $get;
        $this->post = $post;
    }

    public function index()
    {
        // Retrieve the selected panel
        $panel = strtolower($this->get['panel'] ?? '');

        // If the panel isn't valid, supply search as default
        if (!in_array($panel, ['search', 'a-z', 'faculties'])) {
            $panel = 'search';
        }

        // Pagination - Get the page number
        $page = $this->get['page'] ?? 1;

        // Pagination - Get the offset (For DBTable class method)
        $offset = ($page - 1) * 10;

        switch ($panel) {
            case 'search':
                if (isset($this->get['q'])) {
                    $courses = $this->coursesTable->findComplex(
                        [
                            [
                                'field' => 'name',
                                'operator' => 'LIKE',
                                'value' => '%' . $this->get['q'] . '%'
                            ]
                        ],
                        'name',
                        10,
                        $offset
                    );
                    $totalCourses = $this->coursesTable->totalComplex(
                        [
                            [
                                'field' => 'name',
                                'operator' => 'LIKE',
                                'value' => '%' . $this->get['q'] . '%'
                            ]
                        ]
                    );
                }
                break;
            case 'a-z':
                foreach (range('a', 'z') as $letter) {
                    $coursesAZ[$letter] = null;
                    foreach ($this->coursesTable->findAll() as $course) {
                        if (strtolower(substr($course->name, 0, 1)) === $letter) {
                            $coursesAZ[$letter][] = $course;
                        }
                    }
                }

                if (
                    isset($this->get['letter']) &&
                    in_array(strtolower($this->get['letter']), range('a', 'z'))
                ) {
                    $courses = $this->coursesTable->findComplex(
                        [
                            [
                                'field' => 'name',
                                'operator' => 'LIKE',
                                'value' => $this->get['letter'] . '%'
                            ]
                        ],
                        'name',
                        10,
                        $offset
                    );
                    $totalCourses = $this->coursesTable->totalComplex(
                        [
                            [
                                'field' => 'name',
                                'operator' => 'LIKE',
                                'value' => $this->get['letter'] . '%'
                            ]
                        ]
                    );
                }
                break;
            case 'faculties':
                // do something
                $courses = $this->coursesTable->find('faculty_id', $this->get['faculty'] ?? null, 'name', 10, $offset);
                $totalCourses = $this->coursesTable->total('faculty_id', $this->get['faculty'] ?? null);
                break;
            default:
                $courses = $this->coursesTable->findAll('name', 10, $offset);
                $totalCourses = $this->coursesTable->total();
        }

        return [
            'template' => '/courses/index.html.php',
            'title' => 'Courses',
            'variables' => [
                'courses' => $courses ?? null,
                'coursesAZ' => $coursesAZ ?? null,
                'currentPage' => $page,
                'panel' => $panel,
                'totalCourses' => $totalCourses ?? 0
            ]
        ];
    }

    public function courseItem()
    {
        // Retrieve the course being viewed
        $courseId = $this->get['id'] ?? 0;

        // Perform some checks to ensure a valid ID was passed
        if ($courseId <= 0 || !is_numeric($courseId)) {
            header('location: /courses/');
            return;
        }

        $course = $this->coursesTable->findById($courseId);

        // Check if course is valid
        if (!$course) {
            header('location: /courses/');
            return;
        }

        // Retrieve the selected panel
        $panel = strtolower($this->get['panel'] ?? '');

        // If the panel isn't valid, supply search as default
        if (!in_array($panel, ['details', 'entry', 'funding'])) {
            $panel = 'details';
        }

        return [
            'template' => '/courses/course.html.php',
            'title' => 'Courses - ' . $course->name ?? null,
            'variables' => [
                'course' => $course ?? null,
                'panel' => $panel
            ]
        ];
    }
}
