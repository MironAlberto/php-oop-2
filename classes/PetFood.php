<?php

    require_once __DIR__.'/Product.php';

    class PetFood extends Product {
        public $taste;
        public $expiration;

        public function __construct(
            $title,
            $taste,
            $expiration,
            $image = null,
            $price = null,
            $quantity = null,
            $description = null,
            $category = null
        )
        {
            parent::__construct(
                $title,
                $image,
                $price,
                $quantity,
                $description,
                $category
            );
            $this->taste = $taste;
            $this->expiration = $expiration;
        }
    }

?>