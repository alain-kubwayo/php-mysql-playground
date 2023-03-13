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
    // echo pi();

    // ARRAYS
    // !indexed arrays: index is used to get value
    $peopleOne = ['alain', 'tom', 'james'];
    // echo $peopleOne; // Array to string conversion warning. use print_r(arr);
    // echo $peopleOne[1];
    $peopleTwo = array('clement', 'innocent');
    // echo $peopleTwo[1];
    $ages = [20, 40, 79];
    $ages[2] = 60;
    $ages[] = 80; // pushes 80 to the end of array
    array_push($ages, 100);
    // print_r($ages);
    // echo count($ages);

    // Merging arrays
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    // print_r($peopleThree);

    // !associative arrays: key-value pairs
    $studentGradesOne = [
        'alain' => 'A',
        'james' => 'B',
        'tom' => 'D+'
    ];
    $studentGradesTwo = array(
        'helen' => 'C',
        'john' => 'D'
    );
    // print_r($studentGradesOne['alain']);
    // print_r($studentGradesTwo);
    $studentGradesTwo['todd'] = 'A+';
    $studentGradesTwo['todd'] = 'F';
    // print_r($studentGradesTwo);
    // echo count($studentGradesOne);
    $studentGradesThree = array_merge($studentGradesOne, $studentGradesTwo);
    // print_r($studentGradesThree);

    // !Multi-dimensional arrays
    $blogs = [
        ['title' => 'alain party', 'author' => 'alain', 'content' => 'lorem', 'likes' => 30],
        ['title' => 'john cat', 'author' => 'john', 'content' => 'lorem', 'likes' => 50],
        ['title' => 'zelda fitness', 'author' => 'zelda', 'content' => 'lorem', 'likes' => 25],
    ];

    // print_r($blogs[1]['author']);
    // echo count($blogs);
    $blogs[] = ['title' => 'castle party', 'author' => 'jane', 'content' => 'lorem', 'likes' => 100];
    // print_r($blogs);
    // pops off last item in the array
    // $popped = array_pop($blogs);
    // print_r($popped);
    // print_r($blogs);

    // Loops

    $fruits = ['apple', 'mango', 'banana'];
    // for($i = 0; $i < count($fruits); $i++){
    //     echo $fruits[$i] . '<br />';
    // };

    // foreach($fruits as $fruit){
    //     echo $fruit . '<br />';
    // };

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 0],
        ['name' => 'banana skin', 'price' => 2],
    ];

    // foreach($products as $product){
    //     echo $product['name'] . ' - ' . $product['price'] . '<br />';
    // };

    // $i = 0;
    // while($i < count($products)){
    //     echo $products[$i]['name'] . '<br />';
    //     $i++;
    // }

    // !Booleans & Comparisons

    // Comparisons booleans (true or false)

    // echo true; // "1"
    // echo false; // "" empty string since it's false
    // echoing boolean to the browser, we don't see the text true or false. Instead values have to be converted to strings and everything outputted to the browser is ultimately a string of text, numbers or characters. Now, PHP when it sees a boolean, it converts it to either a string of 1 if it's true or a string of empty if it's false. Things are converted to string. Truthy values become 1 as a string and falsy become empty string.
    // !1 is a truthy value and empty string is false
    
    // !comparison with numbers:

    // echo 5 < 10; // 1
    // echo 5 > 10; // "" 0
    // echo 5 == 10; // "" 0
    // echo 10 == 10;
    // echo 5 != 10; 
    // echo 5 <= 5;
    // echo 5 >= 5;

    // !comparison with strings:

    // echo 'alain' < 'yoshi'; // a comes before y => 1
    // echo 'alain' > 'yoshi'; // ""
    // echo 'alain' > 'Alain'; // uppercase letter is seen as less than lowercase letter
    // echo 'mario' > 'Mario';
    // echo 'mario' == 'mario'; // 1

    // loose vs strict equal comparison

    // ! == double equals: we don't take into consideration any kind of type
    // echo 5 == '5'; // 1 => loose comparison
    // echo 5 === '5'; // "" => strict comparison: data type is taken into account. 
    // echo 5 === 5;
    // Most of the time: it's wiser to use strict comparison since there is less room for error

    // echo true == "1";
    // echo false == "";
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
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
            <li>
                <h3><?php echo $product['name']; ?></h3>
                <p>$ <?php echo $product['price']; ?></p>
            </li>
        <?php } ?>
    </ul>
</body>
</html>