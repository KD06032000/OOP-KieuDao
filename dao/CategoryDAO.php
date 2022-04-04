<?php 
    require('./../dao/Database.php');
    class CategoryDao {
        public function __contruct() {
            $database = new Database();
        }

        public function insert(Category $row) {
            try {
                $database->insertTable('categoryTable', $row);
                return true;

            }
            catch(Exception $e) {
                return false;
            }
        }

        function update(Category $row) {
            $database->updateTable('categoryTable', $row);
        }

        function delete(Category $row) {
            $database->deleteTable('categoryTable', $row);
        }

        function findAll() {
            return $database->selectTable('categoryTable');
        }

        function findById(int $id) {
            $database->selectTable('categoryTable', $id);
        }
    }
?>