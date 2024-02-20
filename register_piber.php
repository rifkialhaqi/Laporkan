<?php
require "database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Piber</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main">
        <div class="login-content">
            <h1>Register</h1>

            <form action="" method="post">
                <div class="nm">
                    <label for="username">Username</label>
                    <br>
                    <input type="username" name="username" id="username">
                </div>

                <div>
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="password">
                </div>

                <div>
                    <input type="submit" name="submit" value="Register">
                </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                $enkripsiPassword = password_hash($password, PASSWORD_DEFAULT);

                $query = mysqli_query($connection, "SELECT username FROM login_piber WHERE username= '$username'");
                $count = mysqli_num_rows($query);

                if ($count > 0) {
                    echo "tidak bisa daftar, username ini sudah digunakan";
                } else {
                    $queryInsert = mysqli_query($connection, "INSERT INTO login_piber (username, password) VALUES
                            ('$username', '$enkripsiPassword')");

                    if ($queryInsert) {
                        echo "Register sukses";
                        header("location: login_piber.html");
                    }
                }
            }
            ?>
        </div>
    </div>



</body>

</html>