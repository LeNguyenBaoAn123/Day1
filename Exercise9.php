<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Palindrome Number Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $original = strval($number);
        $reversed = strrev($original);

        if ($original === $reversed) {
            echo "<p>$number is a Palindrome.</p>";
        } else {
            echo "<p>$number is Not a Palindrome.</p>";
        }
    }
    ?>
</body>
</html>
