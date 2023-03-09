<?php
    // echo 'hello, world!';
    // echo 'life is good';

    // Variables: have to start with either a letter or an underscore. So, no numbers and special characters. After the first letter, you could have a combination of any letter (uppercase or lowercase), underscore, and numbers but never a special characters like @ sign. camelCase variable naming $firstName or $first_name
    $name = "Alain";
    $age = 30;
    // echo $name;
    $name = "James";

    // or # used for commenting

    // Constants
    define('GRAVITY', 9.18);
    
    // Strings
    $stringOne = 'my email is ';
    $stringTwo = 'ahkubwayo@gmail.com';
    // echo "Hallo $name"; // variable interpolation => Hallo James
    // echo 'Hallo $name'; // => Hallo $name

    // echo "the cat screamed 'whaaa'";
    // echo "the cat screamed \"whaaa\""; // escape characters
    // echo $name[0];
    // string functions
    // echo strlen($name);
    // echo strtoupper($name);
    // echo strtolower($name);
    // echo str_replace('m', 't', $name);

    // Numbers: two data types: integers and floats
    $radius = 25;
    $pi = 3.14;

    // basic operations: *,-,+,/,**
    // echo $pi * $radius ** 2;
    // Order of operation: BIDMAS
    // Increment and decrement operators:
    // echo $radius++;
    // echo $radius;
    // echo $radius--;
    // echo $radius;

    // shorthand operators:
    $age += 10;
    // echo $age;
    $age *= 2;
    // echo $age;
    
    // number functions
    // echo floor($pi);
    // echo ceil($pi);
    echo pi();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'My First PHP File'; ?></title>
</head>
<body>
    <h1><?php echo 'Hello, world!'; ?></h1>
    <div><?php echo 'Hey, my name is ' . $name; ?></div>
    <div><?php echo $age; ?></div>
    <h2><?php echo GRAVITY; ?></h2>
    <h3><?php echo $stringOne . ' ' . $stringTwo; ?></h3>
</body>
</html>