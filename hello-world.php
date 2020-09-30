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



