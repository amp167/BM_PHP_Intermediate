<?php

namespace app\Posts;

use app\Authors\Author;

class Post
{
    private $author;
    private $post;

    public function __construct(Author $author, $post)
    {
        $this->author = $author;
        $this->post = $post;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPost()
    {
        return $this->post;
    }
}