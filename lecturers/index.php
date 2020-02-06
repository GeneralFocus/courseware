<?php session_start();?>
<?php include '../connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CourseWare</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <style>

    </style>
  </head>
  <body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"  data-target="#navbar" aria-expanded="false" aria-controls="navbar"class="active" data-toggle="modal" data-target=".bs-example-modal-lg">
             Sign In
          </button>
          <a class="navbar-brand" href="#">CourseWAre</a>
        </div>
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
        <h4 class="modal-title" id="exampleModalLabel"></h4>
      </div>
      <div class="modal-body">
          <form action="#" method="post" role="">
        <div class="form-group">
          <div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-inbox"></i></span>
  <input type="email" class="form-control" required="" name="email2" placeholder="Email" aria-describedby="basic-addon1">
</div>
</div>
<div class="form-group">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i> </span>
  <input type="text" name="fn" required="" class="form-control" placeholder="FirstName" aria-describedby="basic-addon1">
</div>
</div>
<div class="form-group">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i> </span>
  <input type="text" name="ln" required="" class="form-control" placeholder="LastName" aria-describedby="basic-addon1">
</div>
</div>
            <button class="btn btn-primary btn-block btn-custom" name="bnt_sb" type="submit" >Register</button>
        <!--<a href="">Forgot Password?</a>-->
        <?php
  //echo '---';
                if(isset($_POST['bnt_sb'])){

               //$email = $_POST['email2'];
                   $un =  $_POST['un'];
                   $pw =  $_POST['pw'];
//                   $email =  $_POST['email'];
//                   $unam =  $_POST['user'];
//        $cpsss =  $_POST['pass1'];
//        $psss1 =  $_POST['pass2'];
//                   echo ''.$unam.$pss;
//                   $filen =$_FILES["photo"]["name"];
//                   $filetmp =$_FILES["photo"]["tmp_name"];
//                   $destination = "upload_image/".$filen;
//                   move_uploaded_file($filetmp, $destination);
//                   $diretry = $destination;

                    // if($cpsss ==  $psss1){
                                                //  echo 'opess...';
                           $query= "select id from reg_customer where em='$email2'";
                   $myquey = mysqli_query($mycon,$query);

                  $row = mysqli_fetch_array($myquey);
//                       echo ''.$row['id'];
                     // $_SESSION["eid"] = $row['id'];


                   if( count($_row["id"])>0){

                       echo 'Email already in use..Please Try another';
                   }  else {
                        $djack= "insert into reg_customer values (null,'$email','$fn','$ln',now(),'0')";
                   $myinsert = mysqli_query($mycon,$djack);
                   if (!$myinsert) {
                       echo 'insertion error ';

                   }  else {
                       echo 'SUCCESSFUL  REGISTRATION ...Go SignUp';
                              echo '<script type="text/javascript">   window.arlert("SUCCESSFUL  REGISTRATION ...Go SignUp"); </script>';
                   }
                   }

//                     }else{
//                          echo 'Password must macth ....pls check and try again ';
//                     }

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
        </form>
      </div>
      </div>
    </div>
  </div>

    <!-- Main Body -->
     <div class="container">
      <div class="col-md-8">
          <img src="interactive-solution-02.png" class="img-responsive animated bounceIn"></img>
      </div>
      <div class="col-md-4">
        <br />
        <br/>
        <form class="form-signup" action="" method="post">
        <h2 class="form-signin-heading">Login here</h2>
        <div class="form-group">
          <label for="inputEmail">Email:</label>
          <input type="text" id="inputEmail" name="email"class="form-control" placeholder="Staff id" required autofocus>
        </div>
        <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" name="pass2" class="form-control" placeholder="Password" required>
        </div>
<!--        <div class="form-group">
          <label>Confirm Password </label>
          <input type="password" id="confirmPassword" name="cpass" class="form-control" placeholder="Confirm Password" required >
        </div>-->
        <button class="btn btn-lg btn-primary btn-block btn-custom" name="bnt_na" type="submit">Sign In</button>
      </form>
         <?php
         //echo '----------------------------';

                if(isset($_POST['bnt_na'])){
              // echo '----------------------------';
                     $email2 = trim($_POST['email'],' ');
                      $pass2 =  $_POST['pass2'];
            $query ="select id from lecture where staff_id = '$email2'";
             $select = mysqli_query($mycon, $query);
             $row = mysqli_fetch_array($select);

             if(count($row["id"]) < 1 ){
                  echo '<script type="text/javascript" > window.alert("Staff id Not Recorgnised...");</script>';
             }  else {
                 $sql ="select pw from lecture where staff_id = '$email2'";
             $result = mysqli_query($mycon, $sql);
                  $row1 = mysqli_fetch_array($result);
                  // $row1["pw"];
                  if($row1["pw"] != $pass2 ){
                      echo '<script type="text/javascript" > window.alert("Password Incompatible...");</script>';
                         }  else {
                             $_SESSION["pcode"]= $email2;
                             echo '<script type="text/javascript" > window.location.replace("create.php");</script>';
                         }
             }
                }

                ?>
      </div>

    </div>
    <div class="clearfix"></div>
    <br />
    <hr />
    <div class="container animate fadeIn">
        <p class="small">
          E classroom
        </p>
      <!--<div class="col-md-4">
       <img src="images/image1.jpg" class="img-responsive"></img>
      </div>-->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript/jquery.1.11.js"></script>
   <script src="javascript/modal.js"></script>
  </body>
</html>
