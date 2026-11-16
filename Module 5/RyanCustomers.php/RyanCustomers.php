<?php
/*
Ryan Barber
CSD-440 Module 5.2
11/15/2026
Customer array program
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ryan's Customer Records</title>
</head>
<body>
    <h1>Customer Information</h1>
    <p>CSD-440 Module 5.2 - Indexed and Associative Arrays</p>

<?php
// Create an indexed array of 10 customers
$customers = [
    ["firstName" => "John", "lastName" => "Smith", "age" => 25, "phone" => "555-0101"],
    ["firstName" => "Sarah", "lastName" => "Johnson", "age" => 32, "phone" => "555-0102"],
    ["firstName" => "Michael", "lastName" => "Brown", "age" => 41, "phone" => "555-0103"],
    ["firstName" => "Emily", "lastName" => "Davis", "age" => 28, "phone" => "555-0104"],
    ["firstName" => "David", "lastName" => "Wilson", "age" => 36, "phone" => "555-0105"],
    ["firstName" => "Jessica", "lastName" => "Miller", "age" => 23, "phone" => "555-0106"],
    ["firstName" => "Daniel", "lastName" => "Moore", "age" => 45, "phone" => "555-0107"],
    ["firstName" => "Ashley", "lastName" => "Taylor", "age" => 30, "phone" => "555-0108"],
    ["firstName" => "Christopher", "lastName" => "Anderson", "age" => 39, "phone" => "555-0109"],
    ["firstName" => "Amanda", "lastName" => "Thomas", "age" => 27, "phone" => "555-0110"]
];
?>

<h2>All Customers</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Phone Number</th>
    </tr>


<?php
foreach ($customers as $customer) {
    echo "<tr>";
    echo "<td>" . $customer['firstName'] . "</td>";
    echo "<td>" . $customer['lastName'] . "</td>";
    echo "<td>" . $customer['age'] . "</td>";
    echo "<td>" . $customer['phone'] . "</td>";
    echo "</tr>";
}
?>
    </table>

<h2>Customer Search Results</h2>

<?php
// Find customers older than 30
$olderCustomers = array_filter($customers, function($customer) {
    return $customer['age'] > 30;
});

// Find customers with the last name Smith
$smithCustomers = array_filter($customers, function($customer) {
    return $customer['lastName'] == "Smith";
});

// Find customers whose first name starts with A
$aCustomers = array_filter($customers, function($customer) {
    return str_starts_with($customer['firstName'], "A");
});
?>

<h3>Customers Older Than 30</h3>
<?php
foreach ($olderCustomers as $customer) {
    echo "<p>" . $customer['firstName'] . " " .
         $customer['lastName'] . " - Age: " .
         $customer['age'] . "</p>";
}
?>

<h3>Customers With Last Name Smith</h3>
<?php
foreach ($smithCustomers as $customer) {
    echo "<p>" . $customer['firstName'] . " " .
         $customer['lastName'] . "</p>";
}
?>

<h3>Customers Whose First Name Starts With A</h3>
<?php
foreach ($aCustomers as $customer) {
    echo "<p>" . $customer['firstName'] . " " .
         $customer['lastName'] . "</p>";
}
?>

</body>
</html>