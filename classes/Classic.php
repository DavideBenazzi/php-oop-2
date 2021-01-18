<?php
    //INCLUDE FATHER CLASS
    include_once __DIR__ . '/BookItem.php';

    //EXTEND FATHER CLASS
    class Classic extends BookItem {
        //TRAIT
        use fakeIsbn;

        public $year;
        public $isbn;

        //CONSTRUCTOR
        public function __construct($title , $pages , $author , $year){
            //SET VALUES IN FATHER CLASS
            parent::__construct($title , $pages , $author);    
            //SET VALUE IN CHILD CLASS
            $this->year = $year;   
            //FAKEISBN ---> TRAIT
            $this->isbn = $this->fakeIsbn($title , $pages , $author);
        }
    }
?>