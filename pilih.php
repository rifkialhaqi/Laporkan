<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Options</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Options</h2>
        <table>
            <tr>
                <th colspan="3">Choose Login Option</th>
            </tr>
            <tr>
                <td><button><a href="login_user.php" style="color: white; text-decoration: none;">Login as User</a></button></td>
                <td><button><a href="login_admin.php" style="color: white; text-decoration: none;">Login as Admin</a></button></td>
                <td><button><a href="login_piber.php" style="color: white; text-decoration: none;">Login as Piber</a></button></td>
            </tr>
        </table>
    </div>
</body>
</html>
