<?php
require "database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-gray-100">
    <div class="flex justify-center items-center h-screen">
        <div class="login-content bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-xs">
            <h1 class="text-center text-xl mb-4">Register</h1>

            <form action="" method="post">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6">
                    <input type="submit" name="submit" value="Register" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                $enkripsiPassword = password_hash($password, PASSWORD_DEFAULT);

                $query = mysqli_query($connection, "SELECT username FROM login_user WHERE username= '$username'");
                $count = mysqli_num_rows($query);

                if ($count > 0) {
                    echo "<p class='text-red-500'>Tidak bisa Register, username ini sudah digunakan</p>";
                } else {
                    $queryInsert = mysqli_query($connection, "INSERT INTO login_user (username, password) VALUES ('$username', '$enkripsiPassword')");

                    if ($queryInsert) {
                        echo "<p class='text-green-500'>Register berhasil</p>";
                        header("location: login_user.html");
                    }
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
