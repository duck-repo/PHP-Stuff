<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2</title>

    <style>
        body{
        display: grid;
        place-items: center;
        height: 100vh;
        margin:0;
        font-family: sans-serif;
        background: black;
        color: gray;
        }
    </style>
</head>

<body>
    <?php
    $name = "Dark Matter";
    $read = false;
    
    if ($read==true)
    {
        $message="You have read $name";
    }
    else
    {
        $message="You have != read $name";
    }

    ?>

    <h1>
        <?php
            echo $message;
        ?>

        <?= "<h1>echo with ?=.</h1>" ?>
    </h1>
</body>
</html>