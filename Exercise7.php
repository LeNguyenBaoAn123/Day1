<!DOCTYPE html>
<html>
<head>
    <title>Reverse a String</title>
</head>
<body>
    <h2>Reverse a String</h2>
    <form method="post">
        Enter a string: <input type="text" name="input" required>
        <input type="submit" value="Reverse">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        $reversed = strrev($input);

        echo "<p>Original string: $input</p>";
        echo "<p>Reversed string: $reversed</p>";
    }
    ?>
</body>
</html>
