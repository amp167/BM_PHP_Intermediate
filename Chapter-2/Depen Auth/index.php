<?php


require_once "vendor/autoload.php";

use app\Authors\Author;
use app\Posts\Post;


class index
{


    public function __construct()
    {
        $fname = "Aung";
        $lname = "Myo Oo";
        $post = "hello My name is Aung Myo Oo";
        $author = new Author($fname, $lname);

        $post = new Post($author, $post);
        $this->answerOut($post);
    }

    public function answerOut(Post $post)
    {
        $author = $post->getAuthor();
        echo $author->getFirstName() . " " . $author->getLastName();
        echo "<hr>" . $post->getPost();
    }
}

new index();