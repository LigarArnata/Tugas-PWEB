<?php 
require 'function.php';
$id = $_GET["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
?>

<html>
    <head>
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        </style>

    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            Name
            <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
            Address
            <input type="text" name="address" value="<?php echo $user['address']; ?>" required><br>
            School
            <input type="text" name="school" value="<?php echo $user['school']; ?>" required><br>
            Image
            <input type="file" name="file" required><br>

            <button type="submit" name="submit" value="edit">Edit</button>
        </form>
        <br>
        <a href="index.php">Index Page</a>
    </body>
</html>