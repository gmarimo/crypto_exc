<?php
$msg="";
$servername = 'localhost';
$dbuser = 'phpmyadmin';
$dbpass = 'm@rimog93';
$dbname = 'bitcoindb';

$conn = mysqli_connect($servername,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno()){
  echo 'Failed to connect: ' . mysqli_connect_errno();

}

// Escape email to protect against SQL injections
if(isset($_POST['loginbtn'])){
$email = ($_POST['email']);
$password1 = ($_POST['password1']);



$sql = "SELECT * FROM `signup` WHERE email = '$email' AND password1 = '$password1'";

$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {

$msg = "Check your details and try again or contact your admin";

}else{
    session_start();
    $_SESSION['email'] = $email;
    header('location: adminpanel.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administritive Login</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
          .formsize{
            max-width: 320px;
            min-width: 200px;
            margin: 0px auto;

          }

          p{color: #ffffff; padding: 5px;}
          hr{padding: 15px;}

          form{
            max-width: 265px;
            min-width: 200px;
            margin-left: 30px;
            width: 100%;
            color: #ff8c00;
          }

          #logo{text-align: center; margin-left: 10px;}

          a{color: #ff8c00;}

          #btnsignup{margin-left: 2%;}

          body{background: #3b5998;}

          h1{color: #ff8c00; padding: 10px; background: #3b5998;}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <br><br>
    <!--Login to the system-->

  <div class="formsize">
    <img id="logo" src="images/logo1.png" width="200" height="55"><br>
    <p><strong>Administrative Login</strong></p>
    <hr/>
<p style="color:red;"><?php if ($msg != "") {echo $msg . "<br><br>";} ?></p>
    <form id="form-size" method="POST" action="index.php" class="form-horizontal">
     <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
      <input type="password" name="password1" class="form-control" id="inputPassword3" placeholder="Password">
      <a href="#">Forgot your password?</a>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div><br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="loginbtn" class="btn btn-default btn-lg active"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</button>


    </div>

  </div>
</form>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src = jscript/jscript.js type="text/javascript"></script>
<script src = jscript/popup.js type="text/javascript"></script>

</body>
</html>
