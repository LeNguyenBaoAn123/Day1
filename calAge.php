<!DOCTYPE html>
<html>
<head>
    <title>Calculate Age</title>
</head>
<body>
    <?php
$birthYear = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = (int)$_POST["age"];
    $currentYear = date("Y");
    $birthYear = $currentYear - $age;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tính năm sinh từ tuổi</title>
</head>
<body>
    <h2>Nhập tuổi để tính năm sinh</h2>
    <form method="post" action="">
        <label for="age">Tuổi của bạn:</label>
        <input type="number" name="age" id="age" min="0" required>
        <input type="submit" value="Tính năm sinh">
    </form>

    <?php if ($birthYear !== ""): ?>
        <p>Năm sinh của bạn là: <strong><?php echo $birthYear; ?></strong></p>
    <?php endif; ?>
</body>
</html>

</body>
</html>

