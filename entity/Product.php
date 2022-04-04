<?php 
    class Product {
        public $id;
        public $name;
        public $categoryId;

        public function __contruct($id,$name,$categoryId) {
            $this->id = $id;
            $this->name = $name;
            $this->categoryId = $categoryId;
        }
        public function  getId()
        {
            return $this->id;
        }
        public function setId($id)
        {
            $this->id = $id;
        }
        public function  getName()
        {
            return $this->name;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
        public function  getCategoryId()
        {
            return $this->categoryId;
        }
        public function setCategoryId($categoryId)
        {
            $this->categoryId = $categoryId;
        }
    }
?>