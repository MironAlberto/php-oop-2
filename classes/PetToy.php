<?php

    require_once __DIR__.'/Product.php';

    class PetToy extends Product {
        public $material;
        public $color;

        public function __construct(
            $title,
            $material,
            $color,
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
            $this->material = $material;
            $this->color = $color;
        }
    }

?>