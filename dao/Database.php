<?php 
    class Database {
        public $productTable = array();
        public $categoryTable = array();
        public $accessoryTable = array();
        protected static $instants = null;

        public static function getInstants($className = 'Database') {
            if(empty(self::$instants)){
                return self::$instants = new $className();
            }
            return self::$instants;
        }


        public function insertTable($name, $row) {
            if(is_subclass_of('BaseRow', $row)) {
                $this->{$name}[] = $row;
                return 1;
            }

            return 0;
        }

        public function selectTable($name, $whereId) {
            if(!empty($whereId)) {
                foreach($this->{$name} as $value) {
                    if($value->getId() == $whereId) {
                        return $value;
                    }
                }
            }

            return $this->{$name};
        }

        public function updateTable($name, $row) {
            if(is_subclass_of('BaseRow', $row)) {
                foreach($this->{$name} as $key=>$value) {
                    if($this->{$name}[$key]->getId() == $row->getId()) {
                        $this->{$name}[$key] = $row;
                    }
                }

                return 1;
            }

            return 0;
        }

        public function deleteTable($name, $row) {
            if(is_subclass_of($row, 'BaseRow')) {
                foreach($this->{$name} as $key=>$value) {
                    if($this->{$name}[$key]->getId() == $row->getId()) {
                        unset($this->{$name}[$key]);
                    }
                }

                return 1;
            }

            return 0;
        }

        public function truncateTable($name) {
            $this->{$name} = null;
        }

        public function updateTableById($id, $row) {
            if(is_subclass_of($row, 'BaseRow'))
            {
                switch(get_class($row))
                {
                    case 'Product' :
                        foreach($this->productTable as $key=>$product)
                        {
                            if($product->getId() == $id)
                            {
                                $this->productTable[$key] = $row;
                            }
                        }
                        break;
                    case 'Category' :
                        foreach($this->categoryTable as $key=>$category)
                        {
                            if($category->getId() == $id)
                            {
                                $this->categoryTable[$key] = $row;
                            }
                        }
                        break;
                    case 'Accessotion' :
                        foreach($this->accessotionTable as $key=>$accessotion)
                        {
                            if($accessotion->getId() == $id)
                            {
                                $this->accessotionTable[$key] = $row;
                            }
                        }
                        break;
                }
                return 1;
            }
            return 0;
        }

        public function getTableByName($nameTable, $name) {
            foreach($this->{$nameTable} as $row)
            {
                if($row->getName() == $name)
                {
                    return $row;
                }
            }
            return 0;
        }



    }
?>