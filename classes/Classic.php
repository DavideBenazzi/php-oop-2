<?php
    //INCLUDE FATHER CLASS
    include_once __DIR__ . '/BookItem.php';

    //EXTEND FATHER CLASS
    class Classic extends BookItem {
        public $year;

        //CONSTRUCTOR
        public function __construct($title , $pages , $author , $year){
            //SET VALUES IN FATHER CLASS
            parent::__construct($title , $pages , $author);    
            //SET VALUE IN CHILD CLASS
            $this->year = $year;       
        }
    }
?>