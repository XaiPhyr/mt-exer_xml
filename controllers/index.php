<?php

class IndexController
{
    function index()
    {
        include("views/index.php");
    }

    function rss()
    {
        include("views/rss.php");
    }
}

$index = new IndexController;
