<?php
    //CLASS FOR GENERIC SHOP ITEM
    class BookItem {
        //PROPERTIES
        public $title;
        public $pages;
        public $author;

        //CONSTRUCTOR
        public function __construct($title , $pages , $author) {
            $this->title = $title;
            $this->pages = $pages;
            $this->author = $author;
        }
    }
?>