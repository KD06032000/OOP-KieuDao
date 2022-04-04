<?php 
    require_once('./../dao/Database.php');
    require_once('./../entity/Product.php');
    require_once('./../entity/Category.php');
    require_once('./../entity/Accessory.php');

    class DatabaseDemo extends Database {
        public function insertTableTest(string $name, object $row) {
            $this->insertTableTest($name, $row);
        }

        public function selectTableTest(string $name, int $whereId = null) {
            return $this->selectTableTest($name, $whereId);
        }

        public function updateTableTest(string $name, object $row) {
            $this->updateTable($name, $row);
        }

        public function deleteTableTest(string $name, object $row) {
            $this->deleteTableTest($name, $row);
        }

        public function truncateTableTest(string $name) {
            $this->truncateTable($name);
        }

        public function updateTableByIdTest(int $id, object $row) {
            $this->updateTableByIdTest($id, $row);
        }

        public function initDatabase() {
            for($i = 1; $i<=10; $i++) {
                $product =  new Product($i, 'IPHONE'.$i, 2);
                $this->insertTable('productTable', $product);

                $category = new Category($i, 'Danh muc'.$i);
                $this->insertTable('categoryTable', $category);

                $accessotion = new Accessotion($i, 'Accessotion'.$i);
                $this->insertTable('accessoryTable', $accessory);
            }
        }
    }

    $database = DatabaseDemo::getInstants('DatabaseDemo');
    $database->initDatabase();
    echo '<pre>';
    print_r($database->selectTableTest('productTable'));
    echo strtolower(get_class($database)).'Table';
?>