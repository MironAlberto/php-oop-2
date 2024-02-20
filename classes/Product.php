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
            $this->title = $title;
            $this->image = $image;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->description = $description;
            $this->category = $category;
        }
    }

?>