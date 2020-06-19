<?php

namespace WUC\Controllers;

use CupOfPHP\DatabaseTable;

class StudentLife
{
    private $get;
    private $post;

    public function __construct(
        $get,
        $post
    ) {
        $this->get = $get;
        $this->post = $post;
    }

    public function index()
    {
        return [
            'template' => '/student-life/index.html.php',
            'title' => 'Student Life',
            'variables' => []
        ];
    }
}
