<?php

    require_once __DIR__.'/Product.php';
    require_once __DIR__.'/traits/HasColor.php';
    require_once __DIR__.'/traits/HasWidth.php';

    class PetKennel extends Product {
        use HasColor;
        use HasWidth;

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