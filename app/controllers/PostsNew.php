<?php

/**
 * Created by PhpStorm.
 * User: otshelnik
 * Date: 14.09.2016
 * Time: 15:32
 */
class PostsNew
{
    public function indexAction()
    {
        echo "PostsNew::index";
    }

    public function testAction()
    {
        echo "PostsNew::test";
    }

    public function testPageAction()
    {
        echo "PostsNew::testPage";
    }

    public function before()
    {
        echo "PostsNew::before";
    }
}