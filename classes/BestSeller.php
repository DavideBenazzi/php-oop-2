<?php
    //INCLUDE FATHER CLASS
    include_once __DIR__ . '/BookItem.php';

    //EXTEND FATHER CLASS
    class BestSeller extends BookItem {
        public $rating;

        //CONSTRUCTOR
        public function __construct($title , $pages , $author , $rating){
            //SET VALUES IN FATHER CLASS
            parent::__construct($title , $pages , $author);    
            //SET VALUE IN CHILD CLASS
            $this->rating = $rating;       
        }
    }
?>