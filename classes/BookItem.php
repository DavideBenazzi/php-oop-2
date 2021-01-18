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
    };

    //TRAIT FOR FAKE ISBN 
    trait fakeIsbn {
        public function fakeIsbn($title , $pages , $author) {
            return substr($title , 0 , 3) . $pages . substr($author , 0 , 3);
        }
    };
?>