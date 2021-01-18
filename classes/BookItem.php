<?php
    //CLASS FOR GENERIC SHOP ITEM
    class BookItem {
        //PROPERTIES
        public $title;
        public $price;
        public $author;

        //CONSTRUCTOR
        public function __construct($title , $price , $author) {
            $this->title = $title;
            $this->price = $price;
            $this->author = $author;
        }
        //METHODS

    }


?>