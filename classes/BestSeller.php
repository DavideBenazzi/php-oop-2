<?php
    //INCLUDE FATHER CLASS
    include_once __DIR__ . '/BookItem.php';

    //EXTEND FATHER CLASS
    class BestSeller extends BookItem {
        //TRAIT
        use fakeIsbn;

        public $rating;
        public $isbn;

        //CONSTRUCTOR
        public function __construct($title , $pages , $author , $rating){
            //SET VALUES IN FATHER CLASS
            parent::__construct($title , $pages , $author);    
            //SET VALUE IN CHILD CLASS
            $this->rating = $rating;
            //FAKEISBN ---> TRAIT
            $this->isbn = $this->fakeIsbn($title , $pages , $author);
        }
    }
?>