<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="chatbot/chatbot.css"> -->
  <link rel="stylesheet" href="chatbot/chatbot.css">
	
	 

</head>


<body>
	<header>
        <div class="logo">Share<b style="color: #c10606;">Eats.</b></div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="home.html" >Home</a></li>
                <!-- <li><a href="about.html" >About</a></li> -->
                <li> <a href="contact.php" class="active">Contact</a> </li>
                <li><a href="profile.php" >Profile</a></li>
            </ul>
        </nav>
    </header>
    <script>
        hamburger=document.querySelector(".hamburger");
        hamburger.onclick =function(){
            navBar=document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>
    <section class="cover" >
        
    </section>



	<p class="heading" style=" margin: 20px;">Feedback </p>
    
     
	
   <!-- <h1 class="heading">Contact Us</h1>  -->
   <div class="contact-form"> 
    <form action="" method="post"> <label for="name">Name:</label> 
     <input type="text" id="name" name="name">
     <br> <label for="email">Email:</label> 
     <input type="email" id="email" name="email">
     <br> <label for="message">Message:</label> <textarea id="message" name="message"></textarea>
     <br> 
     <input type="submit" value="Send" name="send"> 
    </form> 
   </div>



   

   <?php
ob_start(); 
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
// include("connect.php"); 
include 'connection.php';
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

if(isset($_POST['send']))
{
   echo "hello";
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    

    //$pass=password_hash($password,PASSWORD_DEFAULT);
    // $sql="select * from feedback where email='$email'" ;
    // $result= mysqli_query($connection, $sql);
    // $num=mysqli_num_rows($result);
    // if($num==1){

    //     echo "<h1><center>Account already exists</center></h1>";
    // }
    // else{
    
    $query="insert into user_feedback(name,email,message)values('$name','$email','$message')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {
      
       
        //header("location:login_donor.php");
        echo 'yaay';
        header("location:contact.php");
       
    }
    else{
        echo '<script type="text/javascript">alert("data not saved")</script>';
        
    }
}


   

?>

   

   
   <div class="contact-info" style="padding: 10px;"> 
    <p>Email: shareeats@gmail.com</p> 
    <p>Phone: +91 9789 004 341</p> 
    <p>Address: A108 Adam Street <br>
      KOCHI, 683576-INDIA<br></p> 
   </div> 
 






  <!-- <div class="chatbot" style="padding: 30px; background-color: rgba(151, 243, 199, 0.5);">
 <p style="font-size: 23px; text-align: center;">chat bot support <img src="bot-mini.png" alt=""height="20"></p>
  <img src="chitti.jpeg" alt="Robot cartoon" height="300vh"> -->
	
 <!-- <div id="container" class="container"> -->
    

		<!-- <div id="chat" class="chat">
			<div id="messages" class="messages"></div>
			<input id="input" type="text" placeholder="Say something..." autocomplete="off" />
		</div>
        -->
	<!-- </div>  -->
  <!-- <div class="help">
    <p style="font-size: 23px; text-align: center; padding:10px;">Help & FAQs?</p>

<button class="accordion">how to donate food ?</button>
<div class="panel">
  <p>1)click on <a href="fooddonate.html">donate</a> in home page </p>
  <p>2)fill the details </p>
  <p>3)click on submit</p> -->
 <!-- <img src="img/mobile.jpg" alt="" width="100%"> -->
</div>

<button class="accordion">How will my donation be used?</button>
<div class="panel">
  <p style="padding: 10px;"> Your donation will be used to support our mission and the various programs and initiatives that we have in place. Your donation will help us to continue providing assistance and support to those in need. You can find more information about our programs and initiatives on our website. If you have any specific questions or concerns, please feel free to contact us</p>
</div>

<button class="accordion">What should I do if my food donation is near or past its expiration date?</button>
<div class="panel">
  <p style="padding: 10px;">We appreciate your willingness to donate, but to ensure the safety of our clients we can't accept food that is near or past its expiration date. We recommend checking expiration dates before making a donation or contact us for further guidance</p>
  
</div>
  </div>

  </div>
  <!-- <div class="img">
    <img src="chitti.jpg" alt="Robot cartoon" height="300" width="400">
    </div>  -->
    
</body>
<script type="text/javascript" src="chatbot/chatbot.js" ></script>
<script type="text/javascript" src="chatbot/constants.js" ></script> 
<script type="text/javascript" src="chatbot/speech.js" ></script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {  
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      });
    }
    </script>

</html>