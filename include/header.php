<?php session_start(); ?>
<?php include './connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CourseWare</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--  <link href="css/dropzone.css" rel="stylesheet"> -->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header" style="width: 350px;height: 60px;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CourseWare</a>
          <div class="roll" style="width: 150px;height: 30px;float: right;"> <?php    $usern3= $_SESSION['em'];
          $git= "select * from user_reg where email ='$usern3'";
                             $mgit = mysqli_query($mycon,$git);
                             $intt = 0;
                            $row1e = mysqli_fetch_array($mgit);
                //  echo $row1e["name"];
          ?>
           <img src="upload_files/<?php echo $row1e["name"];?>" style="width:60px;height:60px; border-radius:50px;" alt="loading..." />
           <p style=" float: right;line-height: 90px;font-family: monospace;"> <?php  echo $usern3;?></p>
          </div>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="veri.php">Class</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
            <form class="navbar-form navbar-right" method="post" action="">
                <input  required="" type="text" class="form-control" name="name" placeholder="Search by Lectures Name only...">
            <button class="btn btn-default" name="btn_search" ><i class="fa fa-search"></i></button>

            <?php
             if(isset($_POST["btn_search"])){
                 $_SESSION["name"]= $_POST["name"];
                echo '         <script type="text/javascript" > window.location.replace("delete.php");</script>';
             }
            ?>
            </form>

        </div>
      </div>
    </nav>
