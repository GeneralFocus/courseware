<?php session_start();
include './connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CourseWare</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
 /* body{

  width: 100%;
  height: 100%;
  margin: 0;
  overflow-y: hidden;
  overflow-x: hidden;
}*/
    </style>
  </head>
  <body>
<!--      <script>
      window.alert("Hello");
      </script>-->
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CourseWare</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active" data-toggle="modal" data-target=".bs-example-modal-lg"><a href="#">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br/>
    <br/>

    <!-- Modal Body -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="z-index: 10000 !important">
    <div class="modal-dialog" style="z-index: 10000 !important">
      <div class="modal-content" >
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
      </div>
      <div class="modal-body">
          <form action="#" method="post" role="">
        <div class="form-group">
          <div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
  <input type="text" class="form-control" required="" name="email2" placeholder="Matric Number..." aria-describedby="basic-addon1">
</div>
</div>
<div class="form-group">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i> </span>
  <input type="password" name="pass2" required="" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
</div>
</div>
            <button class="btn btn-primary btn-block btn-custom" name="bnt_sb" type="submit" >Sign In</button>
        <a href="">Forgot Password?</a>
        <?php
  //echo '---';
                if(isset($_POST['bnt_sb'])){
                   $email2 = $_POST['email2'];
                   $pass2 =  $_POST['pass2'];

                      $qy= "select id from user_reg where email='$email2'";
                   $myqy = mysqli_query($mycon,$qy);

                   $row = mysqli_fetch_array($myqy);
                    $row['id'];

                   //}
                    if(count($row['id'])>0){
                          // $_SESSION['myid'] = $row['id'];
                          $y1= "select pass from user_reg where email='$email2'";
                   $myy1 = mysqli_query($mycon,$y1);
                   while ($row1 = mysqli_fetch_array($myy1)) {
                         //echo ''.$row1['pass'];
                         $p = $row1['pass'];
                        if($pass2 == $p ){
                           // echo 'nbchnv.k';
                            $_SESSION["em"] = $email2;
                      echo ' <script type="text/javascript">window.location.replace("dashboard.php") </script>';
                       }  else {
                            echo ' '. '<script type="text/javascript">window.alert("Password incorrect"); </script>';
                        }
                   }

                      }
                      else{
                          echo ' '.'<script type="text/javascript">window.alert("Username not recognized"); </script>';
                      }

     //              }

//

                //}
                }
                ?>
        </form>
      </div>
    </div>
    </div>
  </div>

    <!-- Main Body -->
     <div class="container">
      <div class="col-md-8">
          <img src="images/interactive-solution-02.png" class="img-responsive animated bounceIn"></img>
      </div>
      <div class="col-md-4">


        <br />
        <br/>
        <form class="form-signup" enctype="multipart/form-data" action="" method="post">
        <h2 class="form-signin-heading">Register here</h2>
        <div class="form-group">
          <label for="inputEmail">Matric Number:</label>
          <input type="text" id="inputEmail" name="email"class="form-control" placeholder="Matric Number..." required autofocus>
        </div>
        <div class="form-group">
        <div class="form-group">
          <label for="inputEmail">First Name:</label>
          <input type="text" id="inputEmail" name="fn"class="form-control" placeholder="First Name..." required autofocus>
        </div>
        <div class="form-group">
        <div class="form-group">
          <label for="inputEmail">Last Name:</label>
          <input type="text" id="inputEmail" name="ln"class="form-control" placeholder="Last Name..." required autofocus>
        </div>
        <div class="form-group">
        <div class="form-group">
          <label for="inputEmail">Level:</label>
          <select type="text" id="inputEmail" name="lev"class="form-control" required autofocus>

              <option>-----LEVEL-----</option>
              <option value="100">100</option>
              <option value="200">200</option>
              <option value="300">300</option>
              <option value="400">400</option>
          </select>
        </div>
        <div class="form-group">
        <div class="form-group">
          <label for="inputEmail">Level:</label>
          <select type="text" id="inputEmail" name="dpt"class="form-control" required autofocus>

              <option>-----DEPARTMENT-----</option>
              <option value="CSC">CSC</option>
              <option value="MATH STAT">MATH STAT</option>
              <option value="PHYSIC">PHYSIC</option>
              <option value="COM ENG">COM ENG</option>
          </select>
        </div>
        <div class="form-group">
        <label for="inputPassword">Profile picture</label>
        <input type="file" id="inputPassword" name="file" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label>Confirm Password </label>
          <input type="password" id="confirmPassword" name="cpass" class="form-control" placeholder="Confirm Password" required >
        </div>
        <button class="btn btn-lg btn-primary btn-block btn-custom" name="bnt_na" type="submit">Sign Up</button>
      </form>
         <?php
         //echo '----------------------------';

                if(isset($_POST['bnt_na'])){
              // echo '----------------------------';
                   $email = $_POST['email'];
                   $fn =  $_POST['fn'];
                   $ln =  $_POST['ln'];
                   $lev =  $_POST['lev'];
                   $dpt =  $_POST['dpt'];
       $cpsss =  $_POST['cpass'];
         $psss1 =  $_POST['pass'];
//                   echo ''.$unam.$pss;
                     $filen =$_FILES["file"]["name"];
                     $filetmp =$_FILES["file"]["tmp_name"];
                     $destination = "upload_files/".$filen;
                     move_uploaded_file($filetmp, $destination);
                     $diretry = $destination;

             if($cpsss ==  $psss1){
                                                //  echo 'opess...';
                           $query= "select id from user_reg where email='$email'";
                           $myquey = mysqli_query($mycon,$query);

                           $row = mysqli_fetch_array($myquey);
//                       echo ''.$row['id'];



                   if(count( $row['id'])>0){

                       echo 'Matric Number already in use..Please Try another';
                   }  else {
                        $djack= "insert into user_reg values (null, '$email','$fn','$ln','$lev','$dpt','$filen','$destination','$psss1',now(),'0')";
                   $myinsert = mysqli_query($mycon,$djack);
                   if (!$myinsert) {
                       echo 'Sorry, this could not be inserted  someting went wrong, Try Again  ';

                   }  else {
                       echo 'SUCCESSFUL  REGISTRATION... You can Now SignIn With this account';
                             // echo '<script type="text/javascript">   window.location.replace("dashboard.php"); </script>';
                   }
                   }

                     }else{
                          echo 'Password must macth ....pls make sure you remember your password, try again';
                     }

//                  $djack= "insert into user_reg values (null, '$fnam','$lnam','$unam','$psss','$email',now(),'$diretry','0')";
//                   $myinsert = mysql_query($djack);
//                   if (!$myinsert) {
//                       echo 'insertion error '.  die();
//
//                   }  else {
////                       echo 'SUCCESSFUL  REGISTRATION ...';
//                              echo '<script type="text/javascript">   window.alert("SUCCESSFUL  REGISTRATION ..."); </script>';
//                   }
//

//                   }

                }

                ?>
      </div>

    </div>
    <div class="clearfix"></div>
    <br />
    <hr />
    <div class="container animate fadeIn">
        <p class="small">
          CourseWare. Developed By Xisys.
        </p>
      <!--<div class="col-md-4">
       <img src="images/image1.jpg" class="img-responsive"></img>
      </div>-->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--    <script src="jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascript/dropzone.js"></script>
    <script src="javascript/jquery.1.11.js"></script>
   <script src="javascript/modal.js"></script>
  </body>
</html>
