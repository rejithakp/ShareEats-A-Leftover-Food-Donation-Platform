<!-- 
// include 'connection.php';
// include '../connection.php';
// include("connect.php") 
//  $connection=mysqli_connect("localhost","root","");
//  $db=mysqli_select_db($connection,'demo'); -->

<?php
ob_start(); 
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
include("connect.php"); 
include '../connection.php';
// if($_SESSION['name']==''){
// 	header("location:delivery/delivery.php");
// }
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,'demo');
//  if (isset($_GET['x'])){
//     $id =$_GET['x'];
    
    
//     $sql = "SELECT * FROM orphanage_dets WHERE orph_id=$id";
//     $result = mysqli_query($connection, $sql);
//     while ($row = mysqli_fetch_assoc($result)) {
     
//      $a= $row['orph_id'];
//      $b= $row['orphanage_name'];
//      $c= $row['contact_info'];
//      $d= $row['capacity'];
//      $e= $row['address'];
     
     
    
//     }
//  }
// 

if(isset($_POST['sign']))
{
   echo "hello";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
    $date=$_POST['date'];
    

    //$pass=password_hash($password,PASSWORD_DEFAULT);
    // $sql="select * from feedback where email='$email'" ;
    // $result= mysqli_query($connection, $sql);
    // $num=mysqli_num_rows($result);
    // if($num==1){

    //     echo "<h1><center>Account already exists</center></h1>";
    // }
    // else{
    
    $query="insert into feedback(name,email,feedback,date)values('$name','$email','$feedback','$date')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {
      
       
        //header("location:login_donor.php");
        echo 'yaay';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Feedback Form</title>
    <style>
        /* Add some basic styling for readability */
          /* .form{
            height:500px;
            width:500px;
            border:1px solid black;
            margin:100px auto;
            display:flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            gap:20px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            background-color: #3030303
        }  */
         
        
        body {
            font-family: Arial, sans-serif;
            /* background:url('profilecover2.jpg')no-repeat; */
            background-color: #06C167;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200vh;
            box-shadow:box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
           
            
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow:
            height:100px;
            width:500px;
            margin:100px auto;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap:20px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        div {
            margin-bottom: 15px;
            /* height:40px;
            width:100px; */
            display: block;
            /* margin: auto;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: 600;
            border: none;
            background-color: rgb(36, 214, 131); */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, textarea {
            /* width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            height:50px; */
            width:300px;
            margin-bottom:16px;
            padding: 8px;
            box-sizing: border-box;
        }
        .title{
            font-size: 2.5rem;
            font-weight: 600;
        }

        button{
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            height:40px;
            width:100px;
            display: block;
            margin: auto;
            border-radius: 10px;
            
            font-size: 1.2rem;
            font-weight: 600;
            
        }
        


    </style>
</head>
<body>

<div>
    <h1 class="text-center"><b>Feedback</b></h1>
    <form class="form"  method="post">
        
    
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        

    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        

       
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="1" required></textarea>
        
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" rows="1" value="<?php echo $date; ?>" required >
            <!-- Assuming you want to set the current date by default -->
        

       
            <button type="submit" name="sign" value="Register">Submit</button>
        
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>