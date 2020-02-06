<?php session_start()?>
<?php include'../connect.php';?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
     <meta charset="UTF-8">
        <title>Thrift</title>
         <!--<head>-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <a href="index.php"></a>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/css.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    </head>
    <body>
<!--         <div class="logo">
            <img src="../logo3.PNG" class="img-responsive animated bounceInDown"/>
        </div>-->
        <?php
        // put your code here
        include 'hearder.php';

        $lect = $_SESSION["pcode"];
        ?>
<br/>
<br/>
<br/>
<div class="container">
  <?php
        include './path.php';
  ?>
    <h4 style="padding:10px; font-size:29px;"><?php   echo " LECTURER IN CHARGE: ". $full = $row1["fn"]." ".$row1["ln"];?></h4>

</div>
          <h1 style="text-align:center;border-bottom:2px solid grey;">-Edit Profile-</h1>
          <div class="container">
            <form action="" method="post" enctype="multipart/form-data" role="">
          <div class="form-group">
            <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
          <input type="text" readonly class="form-control" required="" value="<?php echo $lect;?>"name="lecturer" placeholder="Lecturer Name" aria-describedby="basic-addon1">
          </div>
          </div>
          <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-book"></i> </span>
          <input type="password" name="class" required="" class="form-control" placeholder="New password" aria-describedby="basic-addon1">
          </div>
          </div>
          <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-home"></i> </span>
          Profile image:<input type="file" name="file" required="" class="form-control" placeholder="Class Title" aria-describedby="basic-addon1">
          </div>
          </div>
              <button class="btn btn-primary btn-block btn-custom" name="bnt_sb" type="submit" >Edit Profile</button>
          <a hidden href="">Forgot Password?</a>
          <?php
          //echo '---';
                  if(isset($_POST['bnt_sb'])){
                     $lecturer = $_POST['lecturer'];
                      //$level = $_POST['level'];
                      $class = $_POST['class'];

                      $filen =$_FILES["file"]["name"];
                      $filetmp =$_FILES["file"]["tmp_name"];
                      $destination = "../upload_files/".$filen;
                      move_uploaded_file($filetmp, $destination);
                      $diretry = $destination;

                          $query_insert_class = "update lecture set imagename='$filen',imagepath='$destination',pw='$class' where staff_id='$lecturer'";
                          $insert_link = mysqli_query($mycon,$query_insert_class);
                          if($insert_link){
                            echo ' '.'<script type="text/javascript">window.alert("Profile Upade was SUCCESSFUL"); </script>';
                        }else {
                          echo "Sorry something happened, Profile could not be updated at the Moment, try again ";
                        }
                      //}

          //              }

          //

                  //}
                  }
                  ?>
          </form>
          </div>


          <script src="../javascript/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../javascript/bootstrap.min.js"></script>
    <script src="../javascript/jquery.1.11.js"></script>
   <script src="../javascript/modal.js"></script>
    </body>
</html>
