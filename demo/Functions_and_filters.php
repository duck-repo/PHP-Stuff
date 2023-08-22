<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and Filters</title>
    
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
        ],

        [
            "name" => "Intelligent Investor",
            "author" => "Benjamin Graham",
            "purchase_url" => "https://example.com"
        ],

        [
            "name" => "Trading Price Action Trends: Technical Analysis",
            "author" => "Al Brooks",
            "purchase_url" => "https://example.com"
        ],

        [
            "name" => "Trading Price Action Reversals: Technical Analysis",
            "author" => "Al Brooks",
            "purchase_url" => "https://example.com"
        ]
        /* Key => Value*/ 
     ];

     function filter_by_author($books){
        
     }
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if($book["author"]==="Al Brooks") : ?> <!-- Use === (triple equal sign) to compare/match values in variables. -->
                <li>
                    <a href="<?= $book["purchase_url"]; ?>">
                        <?= $book["name"]; ?> - By <?= $book["author"] ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <p>
        <?= filter_by_author($books)  ?>
    </p>
</body>
</html>