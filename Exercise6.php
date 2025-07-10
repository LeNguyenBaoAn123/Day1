<!DOCTYPE html>
<html>
<head>
    <title>Triangle Perimeter Calculator</title>
</head>
<body>
    <h2>Calculate Triangle Perimeter</h2>
    <form method="post">
        Side a: <input type="number" name="a" min="0" step="any" required><br>
        Side b: <input type="number" name="b" min="0" step="any" required><br>
        Side c: <input type="number" name="c" min="0" step="any" required><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            $perimeter = $a + $b + $c;
            echo "<p>The perimeter of the triangle is: $perimeter</p>";
        } else {
            echo "<p>The given sides do not form a valid triangle.</p>";
        }
    }
    ?>
</body>
</html>
