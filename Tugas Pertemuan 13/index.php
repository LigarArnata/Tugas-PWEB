<?php require 'function.php' ?>
<html>
    <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td img {
            max-width: 100%;
            height: auto;
        }

        td a, td button {
            display: block;
            margin: 5px;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        td a:hover, td button:hover {
            background-color: #2980b9;
        }
    </style>
    </head>
    <body>
        <table border=1 cellpading = 10 cellspacing = 0>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Address</td>
                <td>School</td>
                <td>Image</td>
                <td>Action</td>
            </tr>
            <?php
            $users = mysqli_query($conn, "SELECT * FROM users");
            $i = 1;

            foreach($users as $user);
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $user["name"];?></td>
                <td><?php echo $user["address"];?></td>
                <td><?php echo $user["school"];?></td>
                <td><img src="uploads/<?php echo $user["image"]; ?>" width="200"></td>
                <td>
                    <a href="edituser.php?id=<?php echo $user['id']; ?>">Edit</a>
                    <form action="" method="post">
                        <button type="submit" name="submit" value=<?php echo $user['id'];?>>Delete</button>
                    </form>
                </td>
            </tr>
        </table>
        
    </body>
</html>