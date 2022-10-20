<?php
include 'header.php';
if(!isset($_SESSION['email']))
{
    header("location:../index.php");
}
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>SUCCESS</strong> Loged in successfully
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
if(isset($_SESSION['email']) && isset($_SESSION['isPremium']) && $_SESSION['isPremium']=='1')
{
    echo "welcome ".$_SESSION['name']." you are premium user";
    header('location:premiumalbum.php');
}
elseif(isset($_SESSION['email']) && isset($_SESSION['isPremium']) && $_SESSION['isPremium']=='0')
{
    echo "welcome ".$_SESSION['name']." you are Normal user";
    header('location:normalalbum.php');
}

?>
<html>
  <body>
 
        <p class="float-right text-uppercase"><?php
        if(isset($_SESSION['name'])){
          
          echo "<font class='font-weight-bold'>".$_SESSION['name']."</font>";
        }
         ?></p>

    
   <font class="font-weight-bold font-italic "><h1><marquee behavior="scroll" direction="left">Welcome to My Album</marquee></h1></font> 
<div class="container my-5">
<div class="jumbotron">
  <font class="font-italic font-weight-bold"><h1 class="display-4">My Album</h1></font>
  <p class="lead">There are two type of albums. One is Normal Album for Normal Users and Other is Premium album for Premium Users.</p>
  <hr class="my-4">
  <p>Many type of ablum like Temple Album, Robotic Album, Flower Album, House Albums.</p>
  
</div>
</div>
</body>
</html>
