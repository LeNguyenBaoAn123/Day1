<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if(isset($_POST['btnLogin'])){
        $u = $_POST["username"];
        $p = $_POST["password"];
        if ($u == 'Hutech' && $p == "123"){
            header("location: hello.php");
        } else {
            echo '<h2 style="color:red;">Invalid username or password</h2>';
        }
    }
    ?>
        <form action="" method="post">
            <div>
                <label for="username">User: </label>
                <input name="username" id="username"/>
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password"/>
            </div>
            <div>
                <input type="submit" name="btnSend" value="Send"/>
            </div>
        </form>
        <!-- <?php
        $btnSend = $_POST['btnSend'];
        if (isset($btnSend)){
            $name = $_POST['name'];
            echo '<h2>Welcome '. $name . '</h2>';
        }
        ?> -->
</body>
</html>