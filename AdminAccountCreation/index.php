<?php
$msg = "";
$servername = 'db706532945.db.1and1.com';
$dbuser = 'dbo706532945';
$dbpass = 'M@rimog.t9398';
$dbname = 'db706532945';


    //------------Create Connection---------------
    $conn = mysqli_connect($servername,$dbuser,$dbpass,$dbname);

    //-------------Check Connection---------------
    if(mysqli_connect_errno()){
      echo 'Failed to connect: ' . mysqli_connect_errno();
    }

     if(isset($_POST['buttonReg'])){
       $email = ($_POST['email']);
       $password = ($_POST['password']);
       $password1 = ($_POST['password1']);

       if ($password != $password1) {
         $msg = "Passwords don't match";
       }


       //check if the email already registered
      $user_email = "SELECT * FROM adminSignup WHERE email = '$email'";
      $result = mysqli_query($conn, $user_email) or die(mysqli_error($conn));
      if (mysqli_num_rows($result) > 0) {
      $msg = "Admin has already been registered";

    }else{
      $sql = "INSERT INTO adminSignup (email, password)
      VALUES('$email','$password')";
      $rslt = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      $msg = "Admin registration successful";
      exit();
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
    <title>Administrative SignUp</title>

    <!-- Bootstrap -->
    <link href="../admin/AdminAccountCreation/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/AdminAccountCreation/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
          .formsize{
            max-width: 320px;
            min-width: 200px;
            margin: 0px auto;


          }

          #logo{text-align: center; margin-left: 10px;}

          p{color: #ffffff; padding: 6px;}
          hr{padding: 15px;}

          form{
            max-width: 260px;
            min-width: 200px;
            margin-left: 30px;
            color: #ff8c00;
          }

          a{color: #ff8c00;}

          #btnsignin{margin-left: 10%;}
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
      <p><strong>Administrative SignUp</strong></p>
      <hr/>


   <p style="color:red;"><?php if ($msg != "") {echo $msg . "<br><br>";} ?></p>

    <form id="form-size" onsubmit="return errolog();" class="form-horizontal" method="POST" action="">
      <div class="form-group">
        <label for="exampleInputEmail1">Email:</label>
          <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
          <div id="erroremail"></div>
      </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
      <div id="errorpassword"></div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password:</label>
      <input type="password" name="password1" class="form-control" id="conf" placeholder="Confirm Password">
      <div id="errorpassword1"></div>
  </div>

      <br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="buttonReg" class="btn btn-primary btn-lg active"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</button>
      <!--<a href="login.php"><button type="button" id="btnsignin" class="btn btn-default btn-lg active">Sign In</button></a>-->
    </div>
    <!--<p>If you have account <a href="login.php">Sign in</a>-->
  </div>
</form>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../jscript/jscript.js" type="text/javascript"></script>




  </body>
</html>
