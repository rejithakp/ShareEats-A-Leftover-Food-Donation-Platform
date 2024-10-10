<?php
ob_start(); 
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
include("connect.php"); 
include '../connection.php';
if($_SESSION['name']==''){
	header("location:deliverylogin.php");
}
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,'demo');
 if (isset($_GET['x'])){
    $id =$_GET['x'];
    
    
    $sql = "SELECT * FROM orphanage_dets WHERE orph_id=$id";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
     
     $a= $row['orph_id'];
     $b= $row['orphanage_name'];
     $c= $row['contact_info'];
     $d= $row['capacity'];
     $e= $row['address'];
     
     
    
    }
 }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphanage Details</title>
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
        }

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

    <form align="center" action="#" method="post"  >
        <label for="name">Orphanage Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $b; ?>" required>

        <label for="address">Address:</label>
        <input type="text" id="address"  name="address" value="<?php echo $e; ?>" required>
        
        <label for="contact_info">Contact Information:</label>
        <input type="text" id="contact_info" name="contact_info" value="<?php echo $c; ?>"required>

        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity"value="<?php echo $d; ?>" required>
        <input type="number" id="capacity" name="id"value="<?php echo $a; ?>" hidden>
        
        
        <button name="loc" type="submit">Submit</button>
        
    </form>
    <?php
   if(isset($_POST['loc']))
   {
   
       $name=$_POST['name'];
       $address=$_POST['address'];
    
       $contact=$_POST['contact_info'];
       $capacity=$_POST['capacity'];
       $id=$_POST['id'];
       
   
       // $location=$_POST['district'];
        $sql="update orphanage_dets set orphanage_name='$name',contact_info='$contact',capacity='$capacity' where orph_id='$id'" ;
       $result= mysqli_query($connection, $sql);
       if($result)
       {
           // $_SESSION['email']=$email;
           // $_SESSION['name']=$row['name'];
           // $_SESSION['gender']=$row['gender'];
          
           header("location:orphanage.php");
           // echo "<h1><center>Account does not exists </center></h1>";
           //  echo '<script type="text/javascript">alert("Account created successfully")</script>'; -->
       }
       
   }
   
    
      
    
    ?>
</div>
</body>
</html>