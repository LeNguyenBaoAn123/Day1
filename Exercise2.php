<!DOCTYPE html>
<html>
<head>
    <title>Celsius to Fahrenheit Converter</title>
</head>
<body>
    <h2>Celsius to Fahrenheit Converter</h2>
    <form method="post">
        Enter temperature in Celsius: <input type="number" name="celsius" step="0.1" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9 / 5) + 32;
        echo $celsius . "°C is equal to " . $fahrenheit . "°F";
    }
    ?>
</body>
</html>
