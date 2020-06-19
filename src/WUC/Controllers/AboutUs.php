<?php

namespace WUC\Controllers;

use CupOfPHP\DatabaseTable;

class AboutUs
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
            'template' => '/about-us/index.html.php',
            'title' => 'About Us',
            'variables' => []
        ];
    }
}
