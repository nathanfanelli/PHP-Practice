<?php
$currentYear = data('Y');
$year = $currentYear - 100;

while(++$year <= $currentYear) {
    echo $year . "<br />\n";
}

do {
    echo $year . "<br />\n";
} while (++year <= $currentYear);

$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'New value'; // This adds a new array element to the end of an array
array_push($learn, 'one', 'two', 'three'); // This adds three new elements to the END of the array
array_unshift($learn, 'beginning'); // This adds an element to the BEGINNING of the array and shifts the beginning index
asort($learn);

$count = 0;
while ((list($key, $val) = each($learn)) && $count++ < 2) {
    echo "$key => $val\n";
}
?>