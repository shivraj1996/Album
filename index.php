<?php
include 'view/header.php';
if(isset($_SESSION['email']))
{
    header("location:View/main.php");
}
else{
include 'view/login.php';

}
if(isset($_GET['login']) && $_GET['login'] == 'fail') {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry</strong> Login Failed. Invalid credentials....
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

?>
<html>

<body style="background-color:rgb(236, 105, 138);">


</body>


</html>
