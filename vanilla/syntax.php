<?php
// 1.
// Variables - In PHP, variables are used to store values or data that can be used throughout your script.
// Variables in PHP start with a dollar sign ($) followed by the variable name. 
// PHP is a loosely typed language, which means you don't need to declare the data type of a variable before using it.

// Declare three variables and assign them values
$name = "John";
$age = 25;
$country = "USA";

// Output the values of the variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Country: " . $country . "<br>";

// 2.
// In PHP, there are several data types that you can use to store values or data in a variable.
// Here are the most commonly used data types:

// Strings: Strings are used to store text and are enclosed in quotes (either single or double).
$name = "John";
// Integers: Integers are used to store whole numbers (positive, negative, or zero).
$age = 25;
// Floats: Floats (also known as doubles) are used to store decimal numbers.
$price = 9.99;
// Booleans: Booleans are used to store true or false values.
$active = true;
// Arrays: Arrays are used to store multiple values in a single variable.
$fruits = array("apple", "banana", "orange");
// Objects: Objects are used to store data and functions together in a single variable.
class Person {
    public $name;
    public $age;
  }
  
  $person = new Person();
  $person->name = "John";
  $person->age = 25;
// Null: Null is used to represent a variable with no value.
$location = null;

// 3.
// Operators are used in PHP to perform various operations on variables and values. 
// PHP supports various types of operators, including arithmetic operators, comparison operators, logical operators, and assignment operators.

// Arithmetic Operators:
// Arithmetic operators are used to perform basic arithmetic operations like addition, subtraction, multiplication, and division. Here are some examples:
$a = 10;
$b = 5;

// Addition
echo $a + $b; // Output: 15

// Subtraction
echo $a - $b; // Output: 5

// Multiplication
echo $a * $b; // Output: 50

// Division
echo $a / $b; // Output: 2

// Comparison Operators:
// Comparison operators are used to compare two values. The result of the comparison is either true or false. 
// Here are some examples:

// Equal to
echo $a == $b; // Output: 0 (false)

// Not equal to
echo $a != $b; // Output: 1 (true)

// Greater than
echo $a > $b; // Output: 1 (true)

// Less than
echo $a < $b; // Output: 0 (false)

// Logical Operators:
// Logical operators are used to combine two or more conditions. Here are some examples:

// AND operator
if ($a > 0 && $b > 0) {
    echo "Both numbers are positive";
}

// OR operator
if ($a == 10 || $b == 10) {
    echo "At least one number is equal to 10";
}

// NOT operator
if (!($a == 5)) {
    echo "The number is not equal to 5";
}

// Assignment Operators:
// Assignment operators are used to assign values to variables. Here are some examples:

// Add and assign
$a += 5; // $a is now 15

// Subtract and assign
$a -= 3; // $a is now 12

// Multiply and assign
$a *= 2; // $a is now 24

// Divide and assign
$a /= 4; // $a is now 6

// Control structures are used in PHP to control the flow of your code. 
// PHP supports various types of control structures, including if/else statements, loops, and switch statements.

// If/else statements:
// If/else statements are used to execute different code blocks based on a condition. Here is an example:

if ($age >= 18) {
    echo "You are an adult";
} else {
    echo "You are not an adult";
}    

// Loops:
// Loops are used to execute a block of code repeatedly. 
// PHP supports various types of loops, including for loops, while loops, and do-while loops. 
// Here are some examples:

// For loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

// While loop
$j = 1;
while ($j <= 10) {
    echo $j . "<br>";
    $j++;
}

// Do-while loop
$k = 1;
do {
    echo $k . "<br>";
    $k++;
} while ($k <= 10);

// Switch statements:
// Switch statements are used to execute different code blocks based on a condition. Here is an example:

$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    default:
        echo "Today is not a weekday";
        break;
}

// Functions in PHP are a way to group a set of related code and execute it when needed. 
// They help in reducing code duplication and make the code easier to maintain. 
// Here is a brief explanation of functions in PHP and some examples of how to use them in a .php file.

// Defining a Function:
// To define a function in PHP, you can use the function keyword followed by the function name and its parameters (if any). Here is an example:

function sayHello() {
    echo "Hello, World!";
}
    
sayHello(); // Outputs "Hello, World!"

// Passing Parameters to a Function:
// You can also pass parameters to a function to customize its behavior based on the input. Here is an example:

function greet($name) {
    echo "Hello, " . $name . "!";
}

greet("John"); // Outputs "Hello, John!"

// Returning Values from a Function:
// Functions in PHP can also return values that can be used later in the code. Here is an example:

function add($num1, $num2) {
    $result = $num1 + $num2;
    return $result;
}

$sum = add(2, 3); // $sum is now 5
echo $sum; // Outputs 5
?>
