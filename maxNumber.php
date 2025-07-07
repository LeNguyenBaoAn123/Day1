<form method="post">
  <input type="text" name="numbers" placeholder="Nhập 3 số cách nhau " required>
  <input type="submit" value="Tìm số lớn nhất">
</form>

<?php
if (isset($_POST["numbers"])) {
    $input = $_POST["numbers"];
    $nums = preg_split('/[\s,]+/', trim($input));      // Tách theo dấu cách hoặc phẩy
    $nums = array_map('floatval', $nums);              // Chuyển sang số
    echo "Số lớn nhất là: " . max($nums);
}
?>
