<?php
ob_start(); 
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
//include("connect.php"); 
include '../connection.php';
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,'demo');
if(isset($_POST['sign']))
{

    $orphname=$_POST['orphanage_name'];
    $address=$_POST['address'];
    $districts=$_POST['district'];
    $contact=$_POST['contact_info'];
    $capacity=$_POST['capacity'];
    
    //$pass=password_hash($password,PASSWORD_DEFAULT);
    // $sql="select * from orphanage_det where orphanage_name='$orphname'" ;
    // $result= mysqli_query($connection, $sql);
    // $num=mysqli_num_rows($result);
    // if($num==1){

    //     echo "<h1><center>Account already exists</center></h1>";
    // }
    // else{
    
    $query="insert into orphanage_dets(orphanage_name,address,district,contact_info,capacity)values('$orphname','$address','$districts','$contact','$capacity')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {
      
      echo "heelo"; 
        //header("location:login_donor.php");
    
        header("location:delivery.php");
       
    }
    else{
        echo '<script type="text/javascript">alert("data not saved")</script>';
        
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

    <form align="center" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name"  name="orphanage_name" required>

        <label for="address">Address:</label>
        <input type="text" id="address"  name="address" required>

        <label for="district">City:</label>
        <!-- <input type="text" id="district"  name="district" required> -->
        <select id="district"  name="district" style="padding:10px; padding-left: 20px;">
                          <option  value="kochi" selected>kochi</option>
                          <option value="calicut">calicut</option>
                          <option value="wayanad">wayanad</option>
                          <option value="malapuram">malapuram</option>
                          <option value="palakkad">palakkad</option>
                          <option value="tiruvallur">Tiruvallur</option>
                          <option value="thrissur">thrissur</option>
                          <option value="ernakulam">ernakulam</option>
                          <option value="idukki">idukki</option>
                          <option value="kollam">kollam</option>
                          <option value="trivandrum">trivandrum</option>
                          <option value="kottayam">kottayam</option>
                          <option value="alappuzha">alappuzha</option>
                          <option value="aluva">aluva</option>
                          <option value="kannur">Kannur</option>
                          <option value="kasargod">kasargod</option>
                          <option value="mananchira">mananchira</option>
                          <option value="madurai" >Madurai</option>
                          <option value="thalaserry">thalaserry</option>
                          <option value="attingal">attingal</option>
                          <option value="puthukkad">puthukkad</option>
                          <option value="payyannur">payyannur</option>
                          <option value="chennai">chennai</option>
                          <option value="angamaly">angamaly</option>
                          <option value="tiruppur">Tiruppur</option>
                          <option value="ollur">ollur</option>
                          <option value="mullaserry">mullaserry</option>
                        </select> 
 
        
        
        <label for="contact_info">Contact Information:</label>
        <input type="text" id="contact_info" name="contact_info" required>

        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" required>
        
        <button type="submit" name="sign" value="Register">Submit</button>
        
    </form>
</div>
</body>
</html>