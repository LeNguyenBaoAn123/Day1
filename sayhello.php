<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <h1>Hello</h1>
        <form action="" method="post">
            <div>
                <label for="name">Your name: </label>
                <input name="name" id="name"/>
                <input type="submit" name="btnSend" value="Send"/>
            </div>
        </form>
        <?php
        $btnSend = $_POST['btnSend'];
        if (isset($btnSend)){
            $name = $_POST['name'];
            echo '<h2>Welcome '. $name . '</h2>';
        }
        ?>
</body>
</html>