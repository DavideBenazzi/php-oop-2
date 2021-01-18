<?php
    include_once __DIR__ . '/classes/Manual.php';
    include_once __DIR__ . '/classes/Classic.php';
    include_once __DIR__ . '/classes/BestSeller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>

    <h1>BOOK STORE</h1>

    <main>
        <h2>Manual</h2>
        <section>
            <?php 
                $manual = new Manual('PHP for dummies' , 390 , 'Janet Valade' , 10 );
                var_dump($manual);
            ?>
        </section>
        <h2>Classic</h2>
        <section>
            <?php
                $classic = new Classic('Frankenstein' , 280 , 'Mary Shelley' , 1823 );
                var_dump($classic);
            ?>
        </section>
        <h2>Best Seller</h2>
        <section>
            <?php
                $bestSeller = new BestSeller('Se scorre il sangue' , 512 , 'Stephen King' , '4,5');
                var_dump($bestSeller);
            ?>
        </section>
    </main>
    
</body>
</html>