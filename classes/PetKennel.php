<?php

    require_once __DIR__.'/Product.php';

    class PetKennel extends Product {
        public $color;
        public $width;

        public function __construct(
            $title,
            $color,
            $width,
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
            $this->color = $color;
            $this->width = $width;
        }
    }

?>