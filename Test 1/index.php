<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function nl() {
            echo "<br>";
        }
        //Variables and Scope
        $x = 10;
        function test() {
            global $x;
            echo $x;
        }
        test();
        nl();


        //Data types
        $string = "Hello World!";
        $integer = 1234;
        $floatingPoint = 12.34;
        $boolean = true;

        //Casting data types
        $foo = 10;
        $bar = (bool) $foo;
        echo $bar;
        nl();


        //Print
        print("Hello World!");
        nl();


        //Echo
        $my_var = "Hello World!";
        echo $my_var;
        nl();


        //var_dump
        $myVar = array("Hello", "World!");
        var_dump($myVar);
        nl();


        //print_r
        $array = array('apple', 'banana', 'cherry');
        print_r($array);
        nl();


        //Constants
        define("PI", 3.141);
        echo PI;

        //Indexed arrays
        $books = ["The Great Gatsby", "Mody Dick", "To Kill a Mockingbird"];
        echo $books[0];
        nl();


        //Associative Arrays
        $ages = [
            "Peter" => 35,
            "John" => 42,
            "Mary" => 27
        ];
        echo $ages["John"];
        nl();


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
        nl();


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
        nl();


        //match
        $message = match (100) {
            200, 300 => 'OK',
            400 => 'error',
            default => 'unknown status code',
        };

        //Loops
        for ($i = 0; $i < 5; $i++) {
            echo $i;
            nl();
        }


        //Functions
        function greet($name) {
            return "Hello, " . $name;
        }
        echo greet("John");
        nl();
        

        //Parameters / Return Values
        function addNumbers($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
        }
        echo addNumbers(3,4);
        nl();


        //Default / Optional Params
        function greet2($name = "guest") {
            echo "Hello, $name!";
        }
        greet2();
        nl();
        greet2("
        John");
        nl();


        //Named Arguments
        $a = array_fill(start_index: 0, count: 100, value: 50);
        echo $a[0];
        nl();


        //Anonymous Functions
        $greet = function($name) {
            printf("Hello %s\r\n", $name);
        };
        $greet('World');
        nl();
        $greet('
        PHP');
        nl();


        //Recursion
        function countDown($count) {
            echo $count;
            if($count > 0) {
                countDown($count - 1);
            }
        }
        countDown(5);
        nl();


        //Variadic Functions
        function sum(...$numbers) {
            return array_sum($numbers);
        }
        echo sum(1, 2, 3, 4);
        nl();


        //require
        require 'basicFunctions.php';
        nl();


        //require_once
        require_once('somefile.php');
        nl();


        //include
        include 'filename.php';
        nl();


        //include_once
        include_once 'database.php';
        nl();
        if (class_exists('Database')) {
            $db = new Database();
        } else {
            echo "Database class does not exist.<br>";
        }
        
        //Reading files
        $file = fopen("example.txt", "r");
        if ($file) {
            while (($line = fgets($file)) !== false) {
                echo $line;
            }
            fclose($file);
        } else {
            echo "Errror opening file<br>";
        }

        //Writing files efficient
        $fileWrite = "data.txt";
        $newData = "New Data\n";
        file_put_contents($fileWrite, $newData, FILE_APPEND | LOCK_EX);
        nl();


        //File Permissions
        echo is_readable($fileWrite) ? "readable" : "not_readable";
        nl();
        echo is_writable($fileWrite) ? "writable" : "not_writable";
        nl();
        echo chmod($fileWrite, 0644) ? "chmod" : "no_chmod";
        nl();
        
        //CSV Processing
        if (($handle = fopen("sample.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                print_r($data);
            }
            fclose($handle);
        }

        //JSON Processing
        $dataJSON = array('a' => 1, 'b' => 2, 'c' => 3);
        $json = json_encode($dataJSON);
        echo $json;
        nl();
        $decoded = json_decode($json, true);
        print_r($decoded);

        //XML Processing
        $xml_data = "hello";
        $parser = xml_parser_create();
        xml_set_element_handler($parser, "startElement", "endElement");
        xml_parse($parser, $xml_data);
        xml_parser_free($parser);

        //$_GET
        nl();
        echo "Name is: " . $_GET['fname'];
        nl();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Last name is: " . $_POST["lname"];
        }
        nl();

        ?>
        <form method="get" action="index.php">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>
        <form method="POST" action="index.php">
            Last Name: <input type="text" name="lname">
            <input type="submit">
        </form>
    <?php

        //$_REQUEST
        $name = $_REQUEST['lname'];
        echo $name;
        nl();
        echo 'Your IP is: ' . $_SERVER['REMOTE_ADDR'];
        nl();
        
        //Cookies;
        setcookie("user", "John Doe", time() + (86400 * 30), "/");
        if (isset($_COOKIE['user'])) {
            echo "The cookie value is: " . $_COOKIE['user'];
        } else {
            echo "Cookie not found or has expired.";
        }
        nl();

        //Sessions
        session_start();
        $_SESSION['username'] = "Drin";
        echo $_SESSION['username'];
            
        
        
    ?>
</body>
</html>