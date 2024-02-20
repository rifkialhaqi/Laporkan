<?php
   session_start();
   require "database.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Piber</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex justify-center items-center h-screen">
        <div class="max-w-md w-full bg-white p-8 rounded-md shadow-md">
            <h1 class="text-2xl font-bold text-center mb-8">Login Piber</h1>

            <form action="" method="post">
                <div class="mb-4">
                    <label for="username" class="block mb-2">Username</label>
                    <input type="username" name="username" id="username" autocomplete="off" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" class="w-full border rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                </div>

                <div class="flex items-center justify-between">
                    <input type="submit" name="submit" value="Login" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 cursor-pointer">
                </div>
            </form>

            <?php
                if(isset($_POST['submit'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query = mysqli_query($connection, "SELECT * FROM login_piber WHERE username='$username'");
                    $count = mysqli_num_rows($query);
                    
                    if($count > 0) {
                        $data = mysqli_fetch_array($query);
                        if(password_verify($password, $data['password'])) {
                            $_SESSION['logged_in'] = true;
                            $_SESSION['username'] = $data['username'];

                            header("location: index_piber.php");
                        } else {
                            echo "<p class='text-red-500'>Password tidak sesuai</p>";
                        }
                    } else {
                        echo "<p class='text-red-500'>Akun anda tidak ditemukan</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
