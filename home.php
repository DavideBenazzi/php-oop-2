<?php
    include_once __DIR__ . '/classes/Manual.php'
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
                $manual = new Manual('PHP for dummies' , '50' , 'Luca Rossi' , 200 );
                var_dump($manual);
            ?>
        </section>
        <h2>Classic</h2>
        <section>
            <?php
            
            ?>
        </section>
        <h2>Best Seller</h2>
        <section>
            <?php
            
            ?>
        </section>
    </main>
    
</body>
</html>