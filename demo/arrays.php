<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books=[
            "Technical Analysis of The Futures Markets",
            "Security Analysis - The Classic 1934 Edition",
            "Essential Knowledge for All Traders in All Markets",
            "The C Programming Language"
        ];

        $animals=[
            "Cats",
            "Cats",
            "Cats"
        ];
    ?>

    <ul>
        <?php 
        foreach ($books as $book){
            echo "<li>$book&trade;</li>"; //Using HTML Entities
            //OR
            echo "<li>${book}™</li>";//using curly braces {}. Everything contained in-between will be rendered. Otherwise, it will simply be echoed out as string.
        }
        ?>
    </ul>
<br>
    <h2>Animals</h2>

    <ul>
        <?php foreach ($animals as $animal): ?>
         <li><?= $animal; ?></li> <!--Eching out $animal using shorthand -->
        <?php endforeach; ?>
        
    </ul>
    
</body>
</html>