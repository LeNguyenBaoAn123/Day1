<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
</head>
<body>
    <h2>Vowel Counter</h2>
    <form method="post">
        Enter a string: <input type="text" name="input" required>
        <input type="submit" value="Count Vowels">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = strtolower($_POST["input"]);
        $vowelCount = 0;

        for ($i = 0; $i < strlen($input); $i++) {
            if (in_array($input[$i], ['a', 'e', 'i', 'o', 'u'])) {
                $vowelCount++;
            }
        }

        echo "<p>Number of vowels: $vowelCount</p>";
    }
    ?>
</body>
</html>
