<?php

namespace WUC\Controllers;

use CupOfPHP\DatabaseTable;

class EventNews
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
            'template' => '/events-news/index.html.php',
            'title' => 'Events & News',
            'variables' => []
        ];
    }

    public function events()
    {
        return [
            'template' => '/events-news/events.html.php',
            'title' => 'Events',
            'variables' => []
        ];
    }

    public function eventsItem()
    {
        // TODO: Replace title
        return [
            'template' => '/events-news/events-item.html.php',
            'title' => '[NAME_HERE] | Event',
            'variables' => []
        ];
    }

    public function news()
    {
        return [
            'template' => '/events-news/news.html.php',
            'title' => 'News',
            'variables' => []
        ];
    }

    public function newsItem()
    {
        // TODO: Replace title
        return [
            'template' => '/events-news/news-item.html.php',
            'title' => '[NAME_HERE] | News',
            'variables' => []
        ];
    }
}
