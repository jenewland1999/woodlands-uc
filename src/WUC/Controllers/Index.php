<?php

namespace WUC\Controllers;

use CupOfPHP\DatabaseTable;

class Index
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
            'template' => '/index.html.php',
            'title' => 'Home',
            'variables' => []
        ];
    }

    public function notFound()
    {
        return [
            'template' => '404.html.php',
            'title' => '404 Not Found',
            'variables' => []
        ];
    }
}
