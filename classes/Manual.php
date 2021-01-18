<?php
    //INCLUDE FATHER CLASS
    include_once __DIR__ . '/BookItem.php';

    //EXTEND FATHER CLASS
    class Manual extends BookItem {
        public $pages;

        //CONSTRUCTOR
        public function __construct($title , $price , $author , $pages){
            //SET VALUES IN FATHER CLASS
            parent::__construct($title , $price , $author);    
            //SET VALUE IN CHILD CLASS
            $this->pages = $pages;       
        }

        //METHODS

    }


?>