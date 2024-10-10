<?php

include '../connection.php';
// include 'connection.php';  


$query = "SELECT * FROM orphanage_dets";
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
    <title>Orphanages</title>
</head>
<body>

    <h2 align="center">Orphanage Details</h2>

    
    <table border="1">
        <tr>
            <th>Orphanage ID</th>
            <th>Orphanage Name</th>
            <th>Address</th>
            <th>Contact Information</th>
            <th>Capacity</th>
            
            
            <!-- <th>Action</th> -->
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['orph_id'] . '</td>';
            echo '<td>' . $row['orphanage_name'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['contact_info'] . '</td>';
            echo '<td>' . $row['capacity'] . '</td>';
            
            // echo '<td><a href="edit_donor.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_donor.php?id=' . $row['id'] . '">Delete</a></td>';
            // echo '<td><a href="edit_donor.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_donor.php?id=' . $row['id'] . '" onclick="return confirm(\'Are you sure you want to delete this donor?\')">Delete</a></td>';
            echo '</tr>';
        }
        ?>

    </table>

</body>
</html>