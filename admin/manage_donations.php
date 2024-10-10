<?php
// ob_start(); 
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
 include("connect.php"); 
// if($_SESSION['name']==''){
// 	header("location:signin.php");

include '../connection.php';
// include 'connection.php';  
// $loc=$_SESSION['location'];

// $query = "SELECT * FROM food_donations where location=\"$loc\"";
$query = "SELECT * FROM food_donations";
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
    <title>Manage Food Donations</title>
</head>
<body>

    <h2 align="center">Food Donations</h2>

    
    <table border="1">
        <tr>
            <th>Donation ID</th>
            <th>Donor Name</th>
            <th>Food Item</th>
            <th>Quantity</th>
            <th>Date</th>
            <!-- <th>Location</th> -->
            <!-- <th>Action</th> -->
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Fid'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['food'] . '</td>';
            echo '<td>' . $row['quantity'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            // echo '<td>' . $row['location'] . '</td>';
            
            // echo '<td><a href="edit_donor.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_donor.php?id=' . $row['id'] . '">Delete</a></td>';
            // echo '<td><a href="edit_donor.php?id=' . $row['Did'] . '">Edit</a> | <a href="delete_donor.php?id=' . $row['Did'] . '" onclick="return confirm(\'Are you sure you want to delete this donor?\')">Delete</a></td>';
            echo '</tr>';
        } 
        ?>

    </table>

</body>
</html>