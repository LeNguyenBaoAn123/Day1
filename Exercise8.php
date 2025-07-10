<!DOCTYPE html>
<html>
<head>
    <title>Area of a Circle</title>
</head>
<body>
    <h2>Calculate Area of a Circle</h2>
    <form method="post">
        Enter radius: <input type="number" name="radius" step="any" min="0" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST["radius"];

        if ($radius > 0) {
            $area = pi() * pow($radius, 2);
            echo "<p>Radius: $radius</p>";
            echo "<p>Area of the circle: " . round($area, 2) . "</p>";
        } else {
            echo "<p>Please enter a positive radius.</p>";
        }
    }
    ?>
</body>
</html>
