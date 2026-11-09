<?php
/*
Ryan Barber
Assignment 4
11/8/26
CSD-440

This program checks six strings to determine whether
they are palindromes. Three strings are palindromes
and three are not.
*/

function isPalindrome($string) {
    $string = strtolower($string);
    return $string === strrev($string);
}

$strings = [
    "racecar",
    "level",
    "radar",
    "hello",
    "computer",
    "world"
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Palindrome Checker</title>
    </head>
    <body>
        <h1>Palindrome Checker</h1>

    <?php
    foreach ($strings as $string) {
        if (isPalindrome($string)) {
            echo "<p>$string is a palindrome.</p>";
        } else {
            echo "<p>$string is not a palindrome.</p>";
        }
    }
    ?>

    </body>
</html>