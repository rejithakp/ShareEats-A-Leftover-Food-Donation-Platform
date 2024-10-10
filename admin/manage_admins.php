<?php

include '../connection.php';
// include 'connection.php';  


$query = "SELECT * FROM admin";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h2 {
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admins</title>
</head>
<body>

    <h2 align="center">Admin Details</Details></h2>

    
    <table border="1">
        <tr>
            <th>Admin ID</th>
            <th>Name</th>
            <th>Email</th>
            
            <!-- <th>Action</th> -->
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Aid'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            
            // echo '<td><a href="edit_donor.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_donor.php?id=' . $row['id'] . '">Delete</a></td>';
            // echo '<td><a href="edit_donor.php?id=' . $row['Aid'] . '">Edit</a> | <a href="delete_donor.php?id=' . $row['Aid'] . '" onclick="return confirm(\'Are you sure you want to delete this donor?\')">Delete</a></td>';
            echo '</tr>';
        }
        ?>

    </table>

</body>
</html>