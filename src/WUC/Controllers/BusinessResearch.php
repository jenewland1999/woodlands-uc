<?php

namespace WUC\Controllers;

use CupOfPHP\DatabaseTable;

class BusinessResearch
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
            'template' => '/business-research/index.html.php',
            'title' => 'Business & Research',
            'variables' => []
        ];
    }
}
