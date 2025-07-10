<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence Generator</title>
</head>
<body>
    <h2>Fibonacci Sequence Generator</h2>
    <form method="post">
        Enter number of terms: <input type="number" name="terms" min="1" required>
        <input type="submit" value="Generate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["terms"];

        $a = 0;
        $b = 1;

        echo "<p>Fibonacci sequence up to $n terms:</p><p>";
        for ($i = 0; $i < $n; $i++) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }
        echo "</p>";
    }
    ?>
</body>
</html>
