<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>CodelCoin.com - Admin Panel</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style/cssfile.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Admin Panel</h3>
                    <strong>AP</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="fa fa-users" aria-hidden="true"></i>
                            Registered Users
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">BTC</a></li>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">ETH</a></li>
                            <li><a href="#">BCH</a></li>
                            <li><a href="#">IOTA</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="baregistration.php">
                          <i class="fa fa-user-plus" aria-hidden="true"></i>
                            Wallets
                        </a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            Withdrawals
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Deposits
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Prices
                        </a>
                    </li>
                </ul>

                <!--<ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul>-->
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"></a></li>
                                <li><a href="#">Create</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>-->
                    </div>
                </nav>


                <?php

                    if(isset($_POST['refresh'])){

                    }else{
                      $query = "SELECT * FROM `signup`";
                      $search_result = populateTable($query);

                    }

                    function populateTable($query){
                      $conn = mysqli_connect('db706532945.db.1and1.com','dbo706532945','M@rimog.t9398','db706532945');
                      $filter_result = mysqli_query($conn, $query);
                      return $filter_result;
                    }

                 ?>





                <!--Users table-->
                <table class="table table-hover" id="ordertable">
                  <h2>KYC details</h2>
                   <tr>
                     <td><strong>ID</strong></td>
                     <td><strong>Email</strong></td>
                     <td><strong>Password</strong></td>
                     <td><strong>isEmailConfirmed</strong></td>
                     <td><strong>BTC Balance</strong></td>
                     <td><strong>USD Balance</strong></td>
                     <td><strong>ETH Balance</strong></td>
                     <td><strong>Witdrawals</strong></td>
                     <td><strong>Deposits</strong></td>
                   </tr>


                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                     <td>replacing with values</td>
                     <td>replacing with values</td>
                     <td>replacing with values</td>
                     <td><?php echo $row['isEmailConfirmed']; ?></td>
                     <td><?php echo $row['idnumber']; ?></td>
                     <td><?php echo $row['email1']; ?></td>
                     <td><?php echo $row['personalphone']; ?></td>
                     <td><?php echo $row['homeaddress']; ?></td>
                     <td><?php echo $row['workaddress']; ?></td>
                     <td><?php echo $row['nationality']; ?></td>
                   </tr>
                  <?php endwhile; ?>
                </table>

            </div>
        </div>



        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
