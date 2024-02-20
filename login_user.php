<?php
    session_start();
    require "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-100">
    <div class="main flex justify-center items-center h-screen">
        <div class="login-content bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-xs">
            <h1 class="text-center text-xl mb-4">User Login</h1>
            <form action="" method="post">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
                    <a href="register.php" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Don't have an account?</a>
                </div>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query = mysqli_query($connection, "SELECT * FROM login_user WHERE username='$username'");
                    $count = mysqli_num_rows($query);

                    if($count > 0) {
                        $data = mysqli_fetch_array($query);
                        if(password_verify($password, $data['password'])) {
                            $_SESSION['logged_in'] = true;
                            $_SESSION['username'] = $data['username'];
                            header("location: index.php");
                        } else {
                            echo "Password salah";
                        }
                    } else {
                        echo "Akun tidak ditemukan";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
