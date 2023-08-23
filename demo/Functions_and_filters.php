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

     function test_func(){
        return "<h4>Hello from test_func</h4>";
     }
     
     function filter_by_author_param1($books){
        //Declaring new storage for filtered result. Can't use $books[] because result from this function could override the contents. eg below:
        /*$books = [];

        foreach($books as $book){
            return $book;
        }
        */
        //$books contains nothing anymore due to the declaration of $book = [] on line 57;

        $filtered_books=[];

        foreach($books as $book){
            if($book['author']==="Benjamin Graham"){
                $filtered_books[]=$book;
            }
        }
        return $filtered_books;
     }

     function filter_by_author_param2($books,$author){
        $filtered_books_by_author=[];
        
        foreach($books as $book_by_author){
            if($book_by_author["author"]===$author)
                $filtered_books_by_author[] = $book_by_author;
        }
        return $filtered_books_by_author;
     }
    ?>

    <h2>
        Displaying all of the recommended books.
    </h2>
    
    <ul>
        <?php foreach ($books as $book) : ?>
                <li>
                    <a href="<?= $book["purchase_url"]; ?>">
                        <?= $book["name"]; ?> - By <?= $book["author"]; ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
<hr>
    <h2>
        Displaying filtered version with single argument.
    </h2>
    <ul>
        <?php foreach (filter_by_author_param1($books) as $filtered_book) : ?>
            <li>
                <a href="<?=$filtered_book["purchase_url"]; ?>">
                    <?= $filtered_book["name"]; ?> - By <?=$filtered_book["author"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<hr>
    <h2>
        Displaying filtered data with two arguments.
    </h2>
    <ul>
        <?php foreach (filter_by_author_param2($books,"Al Brooks") as $filtered_book_by_author) : ?>
            <li>
                <a href="<?=$filtered_book_by_author["purchase_url"]; ?>">
                    <?= $filtered_book_by_author["name"]; ?> - By <?=$filtered_book_by_author["author"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<hr>
    <div>
        <?= test_func();?>
    </div>

</body>
</html>