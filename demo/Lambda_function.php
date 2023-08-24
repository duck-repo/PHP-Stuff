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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /*Version 1 */
     function filter_by_author($books,$author){ //AKA "Named Function"
        $filtered_books=[];
        
        foreach($books as $book){
            if($book["author"]===$author)
                $filtered_books[] = $book;
        }
        return $filtered_books;
     }

     $fn_filter_by_author_v1=filter_by_author($books,"Al Brooks"); //#Assigning to a variable. Called as "extract variable"

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /*Version 2 */
    /*Using Lambda Function (AKA: Annonymous Function)*/

     $filter_by_author_v2 = function ($books,$author_v2){ 
        $filtered_books_v2=[];
        
        foreach($books as $book_v2){
            if($book_v2["author"]===$author_v2)
                $filtered_books_v2[] = $book_v2;
        }
        return $filtered_books_v2;
     }; //When using annonymous functions, variable declaration needs to be ended with semicolon(;) just like any other declartion.

     $fn_filter_by_author_v2 = $filter_by_author_v2($books, "Benjamin Graham");
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*Version 3*/

function filter_v3($items,$key,$value){
    $filtered_items=[];
        
    foreach($items as $item){
        if($item[$key]===$value)
            $filtered_items[] = $item;
    }
    return $filtered_items;
}
$fn_filter_data=filter_v3($books,"author","John J Murphy");


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*Version 4 */

function filter_v4($items,$fn){
    $filtered_data = [];

    foreach($items as $item){
        if($fn($item)){
            $filtered_data[]=$item;
        }
    }

    return $filtered_data;
}

$fn_filter_data_v4=filter_v4($books,function($book){
    return $book["author"] === "Benjamin Graham and David Dodd";
});

/*
The second argument (AKA second signature of the function) will be another function. This way multiple functions can be called.(?)
*/
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*Version 5 */

$filtering_array=array_filter($books,function($book){
    return $book["author"] != "";
});
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ?>

    <h2>
        Displaying filtered data version 1.
    </h2>
    <ul>
         <?php foreach ($fn_filter_by_author_v1 as $book) : ?> <!-- using extracted variable.  -->
            <li>
                <a href="<?=$book["purchase_url"]; ?>">
                    <?= $book["name"]; ?> - By <?=$book["author"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<hr>
    <h2>
        Displaying filtered data version 2.
    </h2>
    <ul>
         <?php foreach ($fn_filter_by_author_v2 as $book) : ?> <!-- using extracted variable.  -->
            <li>
                <a href="<?=$book["purchase_url"]; ?>">
                    <?= $book["name"]; ?> - By <?=$book["author"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<hr>
    <h2>
        Displaying filtered data version 3.
    </h2>
    <ul>
         <?php foreach ($fn_filter_data as $out_data) : ?> <!-- using extracted variable.  -->
            <li>
                <a href="<?=$out_data["purchase_url"]; ?>">
                    <?= $out_data["name"]; ?> - By <?=$out_data["author"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<hr>
    <h2>
        Displaying filtered data version 4.
    </h2>
    <ul>
         <?php foreach ($fn_filter_data_v4 as $out_data) : ?> <!-- using extracted variable.  -->
            <li>
                <a href="<?=$out_data["purchase_url"]; ?>">
                    <?= $out_data["name"]; ?> - By <?=$out_data["author"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<hr>
    <h2>
        Displaying filtered data with built-in PHP filter function.
    </h2>
    <ul>
         <?php foreach ($filtering_array as $out_data) : ?> <!-- using extracted variable.  -->
            <li>
                <a href="<?=$out_data["purchase_url"]; ?>">
                    <?= $out_data["name"]; ?> - By <?=$out_data["author"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>