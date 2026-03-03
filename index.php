<?php

abstract class Category{
    abstract public function getMyCategory();
}

class Attualità extends Category{
    public function getMyCategory(){
        return "Attualità";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        return "Gossip";
    }
}

class Post {
    private $title;
    private $category;
    private $tag;

    public function __construct($title , Category $category , $tag ){
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getCategory(){
        return $this->category->getMyCategory();
    }

    public function getTag(){
        return $this->tag;
    }
}

$post1 = new Post("Titolo 1", new Attualità(), "tag 1");
$post2 = new Post("Titolo Nuovo", new Gossip(), "tag 2");

echo $post1->getTitle() . "\n";
echo $post1->getCategory() . "\n";




