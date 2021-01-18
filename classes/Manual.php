<?php
    //INCLUDE FATHER CLASS
    include_once __DIR__ . '/BookItem.php';

    //EXTEND FATHER CLASS
    class Manual extends BookItem {
        public $price;

        //CONSTRUCTOR
        public function __construct($title , $pages , $author , $price){
            //SET VALUES IN FATHER CLASS
            parent::__construct($title , $pages , $author);    
            //SET VALUE IN CHILD CLASS
            $this->price = $price;       
        }
    }
?>