<?php
/*
Name: Ryan Barber
Date: 11/1/26
Assignment: Module 2.2 Programming Assignment
Purpose: Create an HTML table containing randomly generated numbers using nested PHP loops.
*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Random Number Table</title>
    </head>
<body>
    <h1>Random Number Table</h1>

    <table border="1">

<?php
// Outer loop creates five table rows.
for ($row = 1; $row <= 5; $row++) {
?>
     <tr>
<?php
// Inner loop creates five columns with random numbers.
for ($column = 1; $column <= 5; $column++){
    $randomNumber = rand(1, 100);
?>

    <td><?php echo $randomNumber; ?></td>
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