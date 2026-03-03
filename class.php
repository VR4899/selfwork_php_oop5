<?php
abstract class  Category{
    abstract public function  getMyCategory();
}
class Attualità extends Category{
     public function getMyCategory(){
        echo "Attualità \n";
    }
}
class Sport extends Category{
    public function getMyCategory(){
        echo "Sport\n";
    }
}
class Gossip extends Category{
    public function getMyCategory(){
        echo "Gossip\n";
    }
}
class Storia extends Category{
    public function getMyCategory(){
        echo "Storia";
    }
}

$articolo = new Gossip();
echo $articolo->getMyCategory();
