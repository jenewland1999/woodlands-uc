<?php

namespace WUC;

/**
 * EntryPoint class.
 *
 * @package  WUC
 * @author   Jordan Newland <github@jenewland.me.uk>
 * @license  All Rights Reserved
 * @link     https://github.com/jenewland1999/
 */
class WUCRoutes implements \CupOfPHP\IRoutes
{
    private $pdo;

    private $coursesTable;
    private $eventsTable;
    private $newsTable;
    private $usersTable;

    public function __construct(\PDO $pdo)
    {
        // Store the DB connection on class field
        $this->pdo = $pdo;

        // Instantiate database table instances for DB abstraction layer/ORM
        $this->coursesTable = new \CupOfPHP\DatabaseTable($this->pdo, 'courses', 'course_id');
        $this->usersTable = new \CupOfPHP\DatabaseTable($this->pdo, 'users', 'user_id');

        // Instantiate and store Authentication instance for handling auth
        $this->authentication = new \CupOfPHP\Authentication($this->usersTable, 'email', 'password');
    }

    public function getRoutes(): array
    {
        // Instantiate controllers for handling routes
        $aboutUsController = new \WUC\Controllers\AboutUs(
            $_GET,
            $_POST
        );
        $businessResearchController = new \WUC\Controllers\BusinessResearch(
            $_GET,
            $_POST
        );
        $contactUsController = new \WUC\Controllers\ContactUs(
            $_GET,
            $_POST
        );
        $courseController = new \WUC\Controllers\Course(
            $this->coursesTable,
            $_GET,
            $_POST
        );
        $eventNewsController = new \WUC\Controllers\EventNews(
            $_GET,
            $_POST
        );
        $indexController = new \WUC\Controllers\Index(
            $_GET,
            $_POST
        );
        $studentLifeController = new \WUC\Controllers\StudentLife(
            $_GET,
            $_POST
        );

        $routes = [
            '' => [
                'GET' => [
                    'controller' => $indexController,
                    'action' => 'index'
                ]
            ],
            '404' => [
                'GET' => [
                    'controller' => $indexController,
                    'action' => 'notFound'
                ]
            ],
            'courses' => [
                'GET' => [
                    'controller' => $courseController,
                    'action' => 'index'
                ]
            ],
            'courses/course' => [
                'GET' => [
                    'controller' => $courseController,
                    'action' => 'courseItem'
                ]
            ],
            'student-life' => [
                'GET' => [
                    'controller' => $studentLifeController,
                    'action' => 'index'
                ]
            ],
            'events-news' => [
                'GET' => [
                    'controller' => $eventNewsController,
                    'action' => 'index'
                ]
            ],
            'business-research' => [
                'GET' => [
                    'controller' => $businessResearchController,
                    'action' => 'index'
                ]
            ],
            'about-us' => [
                'GET' => [
                    'controller' => $aboutUsController,
                    'action' => 'index'
                ]
            ],
            'contact-us' => [
                'GET' => [
                    'controller' => $contactUsController,
                    'action' => 'index'
                ]
            ],
            'contact-us/people' => [
                'GET' => [
                    'controller' => $contactUsController,
                    'action' => 'people'
                ]
            ],
            'contact-us/depts' => [
                'GET' => [
                    'controller' => $contactUsController,
                    'action' => 'depts'
                ]
            ]
        ];

        return $routes;
    }

    public function getLayoutVars($title, $output): array
    {
        return [
            'title' => $title,
            'output' => $output
        ];
    }

    public function getAuthentication(): \CupOfPHP\Authentication
    {
        return $this->authentication;
    }

    public function checkPermission($permission): bool
    {
        $user = $this->authentication->getUser();

        if ($user && $user->hasPermission($permission)) {
            return true;
        } else {
            return false;
        }
    }
}
