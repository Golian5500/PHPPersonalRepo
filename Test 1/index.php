<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Variables and Scope
        $x = 10;
        function test() {
            global $x;
            echo $x;
        }
        test();
        echo "<br>";

        //Data types
        $string = "Hello World!";
        $integer = 1234;
        $floatingPoint = 12.34;
        $boolean = true;

        //Casting data types
        $foo = 10;
        $bar = (bool) $foo;
        echo $bar;
        echo "<br>";

        //Print
        print("Hello World!");
        echo "<br>";

        //Echo
        $my_var = "Hello World!";
        echo $my_var;
        echo "<br>";

        //var_dump
        $myVar = array("Hello", "World!");
        var_dump($myVar);
        echo "<br>";

        //print_r
        $array = array('apple', 'banana', 'cherry');
        print_r($array);
        echo "<br>";

        //Constants
        define("PI", 3.141);
        echo PI;

        //Indexed arrays
        $books = ["The Great Gatsby", "Mody Dick", "To Kill a Mockingbird"];
        echo $books[0];
        echo "<br>";

        //Associative Arrays
        $ages = [
            "Peter" => 35,
            "John" => 42,
            "Mary" => 27
        ];
        echo $ages["John"];
        echo "<br>";

        //Multi-dimensional Arrays
        $users = [
            ["John", "john@example.com", "john123"],
            ["Jane", "jane@example.com", "jane123"],
            ["Doe", "doe@example.com", "doe123"]
        ];

        //if/else
        define("number", 10);
        if (number > 5) {
            echo "The number is greater than 5";
        } else {
            echo " The number is less than 5";
        }
        echo "<br>";

        //switch
        $fruit = "apple";
        switch ($fruit) {
            case "apple":
                echo "You chose apple.";
                break;
            case "banana":
                echo "You chose banana.";
                break;
            default:
                echo "Invalid choice.";
        }
        echo "<br>";

        //match
        $message = match (100) {
            200, 300 => 'OK',
            400 => 'error',
            default => 'unknown status code',
        };

        //Loops
        for ($i = 0; $i < 5; $i++) {
            echo $i;
            echo "<br>";
        }

        //Functions
        function greet($name) {
            return "Hello, " . $name;
        }
        echo greet("John");
        echo "<br>";
        
        //Parameters / Return Values
        function addNumbers($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
        }
        echo addNumbers(3,4);
        echo "<br>";

        //Default / Optional Params
        function greet2($name = "guest") {
            echo "Hello, $name!";
        }
        greet2();
        echo "<br>";
        greet2("John");
        echo "<br>";

        //Named Arguments
        $a = array_fill(start_index: 0, count: 100, value: 50);
        echo $a[0];
        echo "<br>";

        //Anonymous Functions
        $greet = function($name) {
            printf("Hello %s\r\n", $name);
        };
        $greet('World');
        echo "<br>";
        $greet('PHP');
        echo "<br>";

        //Recursion
        function countDown($count) {
            echo $count;
            if($count > 0) {
                countDown($count - 1);
            }
        }
        countDown(5);
        echo "<br>";

        //Variadic Functions
        function sum(...$numbers) {
            return array_sum($numbers);
        }
        echo sum(1, 2, 3, 4);
    ?>
</body>
</html>