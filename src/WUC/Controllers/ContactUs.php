<?php

namespace WUC\Controllers;

use CupOfPHP\DatabaseTable;

class ContactUs
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
            'template' => '/contact-us/index.html.php',
            'title' => 'Contact Us',
            'variables' => []
        ];
    }

    public function people()
    {
        return [
            'template' => '/contact-us/people.html.php',
            'title' => 'People A-Z | Contact Us',
            'variables' => []
        ];
    }

    public function peopleItem()
    {
        // TODO: Replace title
        return [
            'template' => '/contact-us/people-item.html.php',
            'title' => '[NAME_HERE] | People A-Z | Contact Us',
            'variables' => []
        ];
    }

    public function depts()
    {
        return [
            'template' => '/contact-us/depts.html.php',
            'title' => 'Departments A-Z | Contact Us',
            'variables' => []
        ];
    }

    public function deptsItem()
    {
        // TODO: Replace title
        return [
            'template' => '/contact-us/depts-item.html.php',
            'title' => '[NAME_HERE] | Departments A-Z | Contact Us',
            'variables' => []
        ];
    }
}
