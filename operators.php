<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php
 
    //Arithmetic Operators
    echo 5**2

    //Assignment Operators
    $x = 100;
    $x /= 20;


    echo $x;

    //Comparison Operators
    $x = 5;
    $y = 10;

    if ($x < $y) {
        echo "True!";
    }
    else {
        echo "False!";
    }

    //Increment/Decrement Operrators
    $x = 10;
    echo --$x;
    echo $x;

    //Logical Operators
    $x = 20;
    $y = 20;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }

  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>