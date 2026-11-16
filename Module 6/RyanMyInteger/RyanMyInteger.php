<?php
/*
Ryan Barber
CSD-440
Module 6
11/15/2026
*/

class RyanMyInteger {
    private int $number;

    public function __construct(int $number) {
        $this->number = $number;
    }

    public function getNumber(): int {
        return $this->number;
    }

    public function setNumber(int $number): void {
        $this->number = $number;
    }

    public function isEven(): bool {
        return $this->number % 2 === 0;
    }

    public function isOdd(): bool {
        return $this->number % 2 !== 0;
    }

    public function isPrime(): bool {
        if ($this->number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->number); $i++) {
            if ($this->number % $i === 0) {
                return false;
            }
        }

        return true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ryan MyInteger Testing</title>
</head>
<body>
    <h1>MyInteger Class Testing</h1>
    <p>CSD-440 Module 5 - PHP Classes</p>

    <?php
    // Create two MyInteger objects
    $number1 = new RyanMyInteger(7);
    $number2 = new RyanMyInteger(10);

    // Test the methods for both objects
    $numbers = [$number1, $number2];

    foreach ($numbers as $number) {
        echo "<h2>Testing Number: " . $number->getNumber() . "</h2>";
        echo "<p>Is Even: " . ($number->isEven() ? "Yes" : "No") . "</p>";
        echo "<p>Is Odd: " . ($number->isOdd() ? "Yes" : "No") . "</p>";
        echo "<p>Is Prime: " . ($number->isPrime() ? "Yes" : "No") . "</p>";
    }

    // Test the setter method
    $number2->setNumber(13);

    echo "<h2>Testing Setter Method</h2>";
    echo "<p>Updated Number: " . $number2->getNumber() . "</p>";
    echo "<p>Is Even: " . ($number2->isEven() ? "Yes" : "No") . "</p>";
    echo "<p>Is Odd: " . ($number2->isOdd() ? "Yes" : "No") . "</p>";
    echo "<p>Is Prime: " . ($number2->isPrime() ? "Yes" : "No") . "</p>";
    ?>
</body>
</html>
