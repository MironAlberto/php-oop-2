<?php

    require_once __DIR__.'/Product.php';
    require_once __DIR__.'/traits/HasMaterial.php';
    require_once __DIR__.'/traits/HasColor.php';

    class PetToy extends Product {
        use HasMaterial;
        use HasColor;

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