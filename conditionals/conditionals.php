<?php 
$a = 5;
$b = '5';

if ($a == $b) {
    echo ' values are equal ';
} else {
    echo ' values are not equal ';
}

if (($a == $b) == false) {
    echo ' values are not equal ';
}
if ($a <> $b) {
    echo ' values are not equal ';
}
if ($a !== $b) {
    echo ' values are not identical ';
}
if ($a) {
    echo 'true';
}
if ($a == false) {
    echo 'false';
}

if ($a != true) {
    echo 'false';
}

// nested conditional statements
$num = 100;

if ($num == 10 || is_string($num)) {
    echo '10 or string';
} else {
    echo 'Not 10 or string';
}

$var1 = true && false; // Takes higher precedence because && operator
$var2 = true and false;

$score = 60;
if ($score >= 60) {
    echo 'You completed the level!';
} elseif ($score < 30) {
    echo 'You should practice more before this level!';
} else {
    echo 'Please try again';
}
?>