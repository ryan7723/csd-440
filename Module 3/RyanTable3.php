<?php
/*
Name: Ryan Barber
Date: 11/1/26
Assignment: Module 3.2 Programming Assignment
Purpose: Generate an HTML table containing the sums of two random numbers using an external PHP function
*/
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Random Number Addition Table</title>
    </head>
<body>
    <h1>Random Number Addition Table</h1>

    <table border="1">

<?php
// Outer loop creates five table rows.
for ($row = 1; $row <= 5; $row++) {
?>
     <tr>
<?php
// Inner loop creates five columns with random numbers.
for ($column = 1; $column <= 5; $column++){
    $number1 = rand(1, 100);
    $number2 = rand(1, 100);
    $sum = addNumbers($number1, $number2);
?>

    <td><?php echo $sum; ?></td>
<?php
}
?>

     </tr>
 <?php
 }
?>
    </table>
</body>
</html>