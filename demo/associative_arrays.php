<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
    
    <style>
     li.author{
        list-style-type: none;
     }   
    </style>
</head>
<body>
   
    <h1>Recommended Books -Ver2-</h1>

    <?php
     $books=[
        [
         "name" => "Technical Analysis of The Futures Markets",
         "author" => "John J Murphy",
         "purchase_url" => "https://example.com"
        ],

        [
        "name" => "Security Analysis - The Classic 1934 Edition",
        "author" => "Benjamin Graham and David Dodd",
        "purchase_url" => "https://example.com"
        ]

        /* Key => Value*/ 
     ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <a href="<?=$book["purchase_url"] ?>">
                <li><?= $book["name"]; ?></li>
                <li class="author">Author:<?=$book["author"] ?></li>
            </a>
        <?php endforeach; ?>
    </ul>
</body>
</html>