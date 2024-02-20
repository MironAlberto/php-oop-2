<?php

    require_once __DIR__.'/classes/Product.php';
    require_once __DIR__.'/classes/Category.php';
    require_once __DIR__.'/classes/PetFood.php';
    require_once __DIR__.'/classes/PetToy.php';
    require_once __DIR__.'/classes/PetKennel.php';

    $dogCategory = new Category ('DOG');
    $catCategory = new Category ('CAT');

    $products = [];

    $sampleProduct = new Product (
        'Sample Product',
        'https://t3.ftcdn.net/jpg/06/14/05/50/360_F_614055030_wRnorUV9sscrLfsqIyaGwY4Kpg4JPypR.jpg',
        8.99,
        2000,
        'Cats are typically solitary animals and don/t mind being left at home alone. Dogs are pack animals and are fine together. They will 
        wait for you at the door all day. Cats are small, thus being prey to larger preditors.',
        $dogCategory
    );
    $products[] = $sampleProduct;

    $dogBone = new PetToy (
        'Dog Bone',
        'Plastic',
        'Red',
        'https://forthefurkids.com/cdn/shop/products/squeaky-dog-toy-trixie-bone_1024x1024@2x.jpg?v=1658346505',
        6.99,
        500,
        'Dog bone (plural dog bones) a bone that is given to a dog to chew on and play with, similar to a dog biscuit. 
        They can be real bones, or they can be made of other materials like plastic or leather.',
        $dogCategory
    );
    $products[] = $dogBone;

    $catFood = new PetFood (
        'Cat Food',
        'Salted',
        '19/01/2025',
        'https://www.deeliver.co.za/cdn/shop/files/whiskas-meaty-nuggets-cat-food-500g-chicken-turkey.jpg?v=1687024101',
        10.99,
        300,
        'Cat food manufacturers blend mixtures of ingredients, including meat and fish, vegetables, cereals, vitamins and minerals to produce foods that will 
        satisfy the nutritional requirements of your cat and achieve the right balance of nutrients.',
        $catCategory
    );
    $products[] = $catFood;

    $dogKennel = new PetKennel (
        'Dog Kennel',
        'Black & Brown',
        '70',
        'https://m.media-amazon.com/images/I/51Do76XgcQL._AC_UF1000,1000_QL80_.jpg',
        35.99,
        150,
        'Along with giving them access to plenty of fresh air and sunlight, kennels keep pets safe whenever 
        they/re outside, preventing them from running away and getting into trouble. They will also keep your dog from pestering neighbors or getting into fights with other dogs.',
        $dogCategory
    );
    $products[] = $dogKennel;


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Shop - PHP OOP 2</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        
        
        <!-- Font Awesome Icons-->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="css/12-col.css"> -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Vue JS -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </head>

    <body>
        <div class="container">
            <header>
                <h1>
                    Pet Shop - PHP OOP 2
                </h1>
            </header>

            <main>
                <div class="row d-flex">
                    <?php
                        foreach ($products as $product) {
                    ?>
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $product->image; ?>" class="card-img-top" id="img-box">
                                <div class="card-body">
                                    <h4>
                                        <?php echo $product->title; ?>
                                    </h4>
                                    <ul>
                                        <li>
                                            Category: <?php echo $product->category->name; ?>
                                        </li>
                                        <li>
                                            $ <?php echo $product->price; ?>
                                        </li>
                                        <li>
                                            Availability: <?php echo $product->quantity; ?>
                                        </li>
                                        <?php
                                            if (get_class($product) == 'PetToy') {
                                        ?>
                                            <li>
                                                Material: <?php echo $product->material; ?>
                                            </li>
                                            <li>
                                                Color: <?php echo $product->color; ?>
                                            </li>
                                        <?php
                                            }
                                            else if (get_class($product) == 'PetFood') {
                                        ?>
                                            <li>
                                                Taste: <?php echo $product->taste; ?>
                                            </li>
                                            <li>
                                                Expiration: <?php echo $product->expiration; ?>
                                            </li>
                                        <?php
                                            }
                                            else if (get_class($product) == 'PetKennel'){
                                        ?>
                                            <li>
                                                Color: <?php echo $product->color; ?>
                                            </li>
                                            <li>
                                                Width: <?php echo $product->width; ?> cm
                                            </li>
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                    <p>
                                        <?php echo $product->description; ?>
                                    </p>
                                </div>
                            </div>
                        
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </main>
        </div>
        <!-- JS -->
        <script src="js/script.js" type="text/javascript"></script>

    </body>
</html>