<?php
$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'New value'; // This adds a new array element to the end of an array
array_push($learn, 'one', 'two', 'three'); // This adds three new elements to the END of the array
array_unshift($learn, 'beginning'); // This adds an element to the BEGINNING of the array and shifts the beginning index
var_dump($learn); 
// You cannot directly display an array
// If you want to display array values, you need to tell PHP how you want them to be formatted.
echo implode("\n", $learn); // returns a list of the values in array as a string
echo 'You removed ' . array_shift($learn); // This will return the first array element that will be removed
echo 'You removed ' . array_pop($learn);
unset($learn[1],$learn[2]); // unset() destroys specified elements
$learn = array_values($learn); // acts as a reset for array keys
// $learn = 'my learning list';
$learn[0] = 'Email'; // updates value of first element in an array
$iceCream = array('Alena' => 'Black Cherry',// This is an associative array
                  'Treasure' => 'Chocolate',
                  'Dave' => 'Cookies & Cream', 
                  'Bruce' => 'Strawberry');
echo $iceCream['Alena'];
?>