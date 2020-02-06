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
<?php
        include './path.php';
?>
<!--h1>Class inFo:</h1-->
        <h4 style="padding:10px; font-size:29px;"><?php                 $git= "select * from lecture where staff_id ='$lect'";
                           $mgit = mysqli_query($mycon,$git);
                           $intt = 0;
                          $row1 = mysqli_fetch_array($mgit);
                        echo " LECTURER IN CHARGE: ". $full = $row1["fn"]." ".$row1["ln"];
                      $first = $row1["fn"];
;?></h4>
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>class Title</th>
                  <th>Level</th>
                  <th>Date</th>
                  <th>Enter</th>



                </tr>
              </thead>
              <tbody>
                <tr>
                    <?php

                $qy= "select * from class where lecturer ='$lect'";
                   $myqy = mysqli_query($mycon,$qy);
                   $intt = 0;
                   while ($row = mysqli_fetch_array($myqy)) {
                       //echo $row["id"];
                       //$intt = $intt+1;


                         $intt = $intt+1;
                   ?>

                    <td><?php echo $intt;?></td>
                  <td><?php echo $row["class_title"];//video?></td>
                  <td><?php echo $row["level"];//video?></td>
                  <td><span><?php echo $row["date"];//video?></span></td>
                  <td><p><a href="class.php?class=<?php echo $row["id"];//video?>"><i class="fa fa-plus"></i></a></p></td>



                </tr>
                <?php
                       }
//                   }
                ?>


              </tbody>
            </table>
          </div>
          <h1 style="text-align:center;border-bottom:2px solid grey;">-Create Class-</h1>
          <div class="container">
            <form action="" method="post" role="">
          <div class="form-group">
            <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
          <input type="text" readonly class="form-control" required="" value="<?php echo $lect;?>"name="lecturer" placeholder="Lecturer Name" aria-describedby="basic-addon1">
          </div>
          </div>
          <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-book"></i> </span>
          <input type="text" name="class" required="" class="form-control" placeholder="Class Title" aria-describedby="basic-addon1">
          </div>
          </div>
          <div class="form-group">
          <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-home"></i> </span>
          <select  name="level" required="" class="form-control"  aria-describedby="basic-addon1">
             <option value="">Level</option>
              <option value="100">100</option>
               <option value="200">200</option>
                <option value="300">300</option>
                 <option value="400">400</option>
          </select>
          </div>
          </div>
              <button class="btn btn-primary btn-block btn-custom" name="bnt_sb" type="submit" >Start a New Class</button>
          <a hidden href="">Forgot Password?</a>
          <?php
          //echo '---';
                  if(isset($_POST['bnt_sb'])){
                     $lecturer = $_POST['lecturer'];
                      $level = $_POST['level'];
                      $class = $_POST['class'];

                        $qy= "select id from class where lecturer='$lecturer' and class = '$class' and level = '$level' ";
                     $myqy = mysqli_query($mycon,$qy);

                     $row = mysqli_fetch_array($myqy);
                //      $row['id'];

                     //}
                      if(count($row['id'])>0){
                            /* $_SESSION['myid'] = $row['id'];
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
                          } **/
                          echo "Class already Exist, Creat a Fresh One ";
                     //}

                        }
                        else{
                          $query_insert_class = "insert into class values (null,'$class','$level','$lecturer',now(),'0')";
                          $insert_link = mysqli_query($mycon,$query_insert_class);
                          if($insert_link){
                            echo ' '.'<script type="text/javascript">window.alert("Class Created SUCCESSFULLY"); </script>';
                        }else {
                          echo "Sorry something happened, class could not be created at the Moment, try again ";
                        }
                      }

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
