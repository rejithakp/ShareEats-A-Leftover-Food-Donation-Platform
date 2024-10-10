<?php

?>


<?php

ob_start(); 

// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
include '../connection.php';
 include("connect.php"); 
if($_SESSION['name']==''){
	header("location:deliverylogin.php");
}
$name=$_SESSION['name'];
$id=$_SESSION['Did'];

 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,'demo');
 $sql = "SELECT * FROM orphanage_dets";
 $result = mysqli_query($connection, $sql);
 $data = array();
 while ($row = mysqli_fetch_assoc($result)) {
     $data[] = $row;
 }
 

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage Details</title>
    <link rel="stylesheet" href="../home.css">

<link rel="stylesheet" href="delivery.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }knmd

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div>    
    <h2 align="center">Orphanage Details</h2>
    <br>
    <!-- Display the orders in an HTML table -->
<div class="table-container">
         <!-- <p id="heading">donated</p> -->
         <div class="table-wrapper">
        <table class="table" border="1">
        <thead>
        <tr>
            <th >Orphanage Name</th>
            <!-- <th>food</th> -->
            <!-- <th>Category</th> -->
            <th>Address</th>
            <th>Contact information</th>
            <th>Capacity</th>
            <th></th>
            
         
          
           
        </tr>
        </thead>
       <tbody>

        <?php foreach ($data as $row) { ?>
        <?php    echo "<tr><td data-label=\"name\">".$row['orphanage_name']."</td><td data-label=\"address\">".$row['address']."</td><td data-label=\"address\">".$row['contact_info']."</td><td data-label=\"date\">".$row['capacity']."</td>;<td><a href='orphanage_detls.php?x={$row["orph_id"]}'>Edit</a></td></tr>";
?>
        
     
        <?php } ?>
    </tbody>
</table>

            </div>

                </div>     
     
        

</div>
</body>
</html>