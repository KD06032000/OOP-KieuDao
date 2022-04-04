<?php 
    include('entity/Product.php');
    class ProductDemo extends Product {
       public function createProductTest($id, $name, $categoryId) {
            $this->setId($id);
            $this->setName($name);
            $this->setCategoryId($categoryId);
        }

       public function printProduct() {
            $this->getId();
            $this->getName();
            $this->getCategoryId();
        }
 
    }
    
    $ProductDemo =  new ProductDemo();
    $ProductDemo->createProductTest(01,'H',1);
    echo $ProductDemo->printProduct();
?>