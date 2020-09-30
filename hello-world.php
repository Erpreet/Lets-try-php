This is before my PHP tag! This will be output as string



<?php 

//"Echo" and "prints" are functions we can
// use to output strings as a response
echo "Hello, World!";

# This a also a single line comment

/* This is a multi-line comment
multi
line */

//Variable names start with a dollar-sign ($)
//case-sensitive
// dont start with numbers

//Single quotes will not evaluate special characters
//variable values within the string

//Double quotes will though.

$studentName = "\n Fahad";
echo $studentName;

$studentName2 = '\nDanish';
echo $studentName2;

echo "\n\n Two students in TECHCareers are: \n - $studentName\n$studentName2.";

echo '\n\n Two students in TECHCareers are: \n $studentName\n$studentName2.';

//concatenation character in PHP is period
echo "\n\n This string is being " . 'concatenated!';

//datatypes
//strings..

$string1 = 'I \ a string!';
$string2 = "I'm ALSO a string!";

//Integers

$int1 = -26;
$int2 = 0;
$int3 = 42;

//Float/Doubles

$float1 = 3.14;
$float2 = -29.6;

//Booleans
$bool1 = TRUE;
$bool2 = false;

//arrays
//these are indexed arrays
$array1 = ['First value' , 17, 16.8, FALSE];

$array2 = array('First value', 17, 16.8, FALSE);
echo $array1[1];

//Associative arrays have KEYS separated from VALUES but with fat arrow
$array3 = array (
    'key' => 'value',
    'name' => 'George',
    'age' => 36

);

echo $array3['name'];
 
// Objects...
$object = new stdClass(); // Create a new instance of Standard Class.
$object->name = 'TECHCareers'; // Simple property assignment.
$object->cohort = 4.2;
$object->year = 2020;
echo "\n\n$object->name" . ' | ' . $object->cohort . ' | ' . $object->year;

//null
$myNullVar = NULL; //again, case-insensitive

//loops

for($iterator  = 0; $iterator < 10; $iterator += 2)
{
    echo "\n OUR LOOP IS ON ITERATION: $iterator";
}

//associative
$students = [
    'Danish' => 'Reading',
    'Eboka' => 'Reading',
    'Birm' => 'Watching Tennis',
    'Preet' => 'Enjoying nature',
];

foreach ($students as $abc => $hobby)
{
    echo "\n - Hi, my name is $abc! I like $hobby.";
}

$i = 12;
while($i > 2)
{
    echo "\n WHILE ITERATOR IS AT: $i";
    $i --; //same as $i = $i - 1;
}

echo "\n";

function addition ($num1, $num2)
{
    return $num1 + $num2;
}

echo addition (5, 10); 
echo "\nAddition result:" . addition("23", 3);
echo "\n Addition result:" . addition("hi5", 2);
echo "\n Addition result:" . addition("7", 2);













