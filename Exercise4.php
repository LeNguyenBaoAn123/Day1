<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Prime Number Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" min="0" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];

        if ($n < 2) {
            echo "<p>Not Prime</p>";
        } else {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }

            echo $isPrime ? "<p>Prime</p>" : "<p>Not Prime</p>";
        }
    }
    ?>
</body>
</html>
