<?php

    class Product {
        public $title;
        public $image;
        public $price;
        public $quantity;
        public $description;
        public $category;

        public function __construct(
            $title,
            $image = null,
            $price = null,
            $quantity = null,
            $description = null,
            $category = null
        )
        {
            if (is_string($title)) {
                $this->title = $title;
            }
            else {
                throw new Exception('Error: Title is not a string');
            }
            $this->image = $image;
            if (is_numeric($price)) {
                $this->price = $price;
            }
            else {
                throw new Exception('Error: Price is not a number');
            }
            $this->quantity = $quantity;
            $this->description = $description;
            $this->category = $category;
        }
    }

?>