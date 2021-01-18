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
        <h2>Manuals</h2>
        <section>
            <?php 
                $manual = new Manual('PHP for dummies' , 390 , 'Janet Valade' , 10 );
            ?>
            <h4>Title : <?php echo $manual->title ?></h4>
            <h4>Pages : <?php echo $manual->pages ?></h4>
            <h4>Author : <?php echo $manual->author ?></h4>
            <h4>Price : <?php echo $manual->price ?></h4>
            <h5>Fake ISBN : <?php echo $manual->isbn ?></h5>
        </section>
        <h2>Classics</h2>
        <section>
            <?php
                $classic = new Classic('Frankenstein' , 280 , 'Mary Shelley' , 1823 );
            ?>
            <h4>Title : <?php echo $classic->title ?></h4>
            <h4>Pages : <?php echo $classic->pages ?></h4>
            <h4>Author : <?php echo $classic->author ?></h4>
            <h4>Year of publication : <?php echo $classic->year ?></h4>
            <h5>Fake ISBN : <?php echo $classic->isbn ?></h5>
        </section>
        <h2>Best Sellers</h2>
        <section>
            <?php
                $bestSeller = new BestSeller('Se scorre il sangue' , 512 , 'Stephen King' , '4,5');
            ?>
            <h4>Title : <?php echo $bestSeller->title ?></h4>
            <h4>Pages : <?php echo $bestSeller->pages ?></h4>
            <h4>Author : <?php echo $bestSeller->author ?></h4>
            <h4>Rating : <?php echo $bestSeller->rating ?></h4>
            <h5>Fake ISBN : <?php echo $bestSeller->isbn ?></h5>
        </section>
    </main>
    
</body>
</html>