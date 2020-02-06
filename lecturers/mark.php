<?php session_start();?>
<?php include '../connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CourseWare</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    </style>
  </head>
  <body>
<!--      <script>
      window.alert("Hello");
      </script>-->
 <?php include './hearder.php';?>
      <div class="container">

          <br/>
          <br/>
          <?php
                  include './path.php';
        ?>
          <form class="form-signup" action="" method="post" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Welcome:  <?php
         $query2 ="select * from lecture where staff_id = '$lecture'";
             $select2 = mysqli_query($mycon, $query2);
             $row = mysqli_fetch_array($select2);
              $fullname = $row["fn"].' '.$row["ln"];
              echo $fullname;
        ?></h2>
        <div class="form-group">
          <label for="inputEmail">Material Tittle:</label>
          <input type="text" id="inputEmail" name="tit"class="form-control" placeholder="Material Tittle..." required autofocus>
        </div>
        <div class="form-group">
          <label for="inputEmail">Course Code:</label>
          <input type="text" id="inputEmail" name="ccd"class="form-control" placeholder="Course Code..." required autofocus>
        </div>
        <div class="form-group">
          <label for="inputEmail">Level:</label>
          <select  id="inputEmail" name="lev" class="form-control"  required autofocus>
              <option >level</option>
              <option value="100">100</option>
              <option value="200">200</option>
              <option value="300">300</option>
              <option value="400">400</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputEmail">Material Type:</label>
          <select  id="inputEmail" name="mat" class="form-control"  required autofocus>
              <option >material type </option>
              <option value="pdf">pdf</option>
              <option value="doc">doc</option>
              <option value="txt">txt</option>
              <option value="zip">zip</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputEmail">Note on Material:</label>
          <textarea  id="inputEmail" name="note" class="form-control" placeholder="Note on Material..." required autofocus>

          </textarea>
        </div>
            <div class="form-group">
                <label for="inputEmail">Upload<i class="fa fa-send-o"></i></label>
                <input type="file" id="inputEmail" name="file"class="form-control"  required autofocus>
        </div>

<!--        <div class="form-group">
          <label>Confirm Password </label>
          <input type="password" id="confirmPassword" name="cpass" class="form-control" placeholder="Confirm Password" required >
        </div>-->
<!--        <button class="btn btn-lg btn-primary btn-block btn-custom" name="bnt_na" type="submit">Search</button>
        <button class="btn btn-lg btn-primary btn-block btn-custom" name="Mark" type="submit">Mark</button>    -->
        <button class="btn btn-lg btn-primary btn-block btn-custom" name="oa" type="submit">Upload</button>
    <?php
         if(isset($_POST["oa"])){

             $tit = $_POST["tit"];
                $ccd = $_POST["ccd"];
                 $lev  = $_POST["lev"];
                  $mat = $_POST["mat"];
                  $note = $_POST["note"];

                  $name = $_FILES["file"]["name"];
                  $tmp_name = $_FILES["file"]["tmp_name"];
                  $destination = "../upload_files/".$name;
                   move_uploaded_file($tmp_name, $destination);
                   $diretry = $destination;

             $insert1 = "insert into files values(null,'$tit','$ccd','$lev','$mat','$note','$name','$destination','$fullname',now(),'0')";
            $gop1 = mysqli_query($mycon,$insert1);
            if(!$gop1){
               echo '     <script type="text/javascript">window.alert("Something Happened You where unable to Upload, Try Again... ");</script>';
            }
            else {
            echo '     <script type="text/javascript">window.alert("Upload Completed!");</script>';
}


         }
         if(isset($_POST["Mark"])){
             $em = $_POST["email"];
               $mai = str_rot13($em);


             $insert1 = "update payment set status='Marked' where customer='$mai'";
            $gop1 = mysqli_query($mycon,$insert1);
            if(!$gop1){
                echo 'nooo';
            }
            else {
            echo '     <script type="text/javascript">window.alert("Account Thrift Marked");</script>';
}


         }
                      ?>
            <?php
    //  if(isset($_POST['bnt_na'])){
//            $email3 = $_POST["email"];
//             $gh= "select * from close where pho='$email3' and status='1'";
//                   $gh2 = mysqli_query($mycon,$gh);
//                   $rap = mysqli_fetch_array($gh2);
//
//                   if(count($rap["id"]) > 0){
                       ?>
<!--        <h3 style="padding: 10px;border: 2px solid #9b9bea;border-top-left-radius: 15px;border-bottom-right-radius: 15px;background-color: lightblue;">This Account has been Closed For The Month <img src="../upload_files/3.png" alt="close"/></h3>-->
        <?php

//                   }
//                   else{


      ?>
        <br/>


        </form>

              <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>extenssion</th>
                  <th>level</th>
                  <th>Date/Time</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                    <?php

              // echo '----------------------------';
                     //     $email3 = $_POST["email"];
                      //$mail = str_rot13($email3);
//                        $qy2= "select * from files where lecturer='$fullname'";
//                   $myqy2 = mysqli_query($mycon,$qy2);
//                        $tt = 0;
//                   $tts = 0;
//                   while ($row = mysqli_fetch_array($myqy2)) {
//                        $mant = $row["amount"];
//                          $per1=0.1*$mant;
//                          $det = $mant-$per1;
//                        $tt=$tt+$mant;
//                         $tts=$tts+$det;
//                   }
//                   echo '<h3>'.'Total Amount Saved : '.$tt.'</h3>';
//                   echo '<h3>'.'Total Amount To be paid  : '.$tts.'</h3>';
                $qy= "select * from files where lecturer='$fullname'";
                   $myqy = mysqli_query($mycon,$qy);
                   $intt = 0;

                   while ($row = mysqli_fetch_array($myqy)) {
                       //echo $row["id"];
                       //$intt = $intt+1;



                         $intt = $intt+1;

                   ?>

                    <td><?php echo $intt;?></td>
                  <td><?php
                 $cus= $row["tittle"];
                 //$cus1 = str_rot13($cus);
                 echo $cus;
                 ?></td>
                  <td><?php echo $row["type"];//video?></td>
                  <td><?php
                $tela = $row["type"];
                echo $tela;

             ?>

                  </td>
                  <td><?php echo $row["date"];//video?></td>



                </tr>

                <?php
                       //}
                   }
      //             }
                ?>


              </tbody>
            </table>
                          </div>
  </div>
               <?php
                   //}
//                }

                ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../javascript/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../javascript//bootstrap.min.js"></script>
    <script src="../javascript/jquery.1.11.js"></script>
   <script src="../javascript/modal.js"></script>
  </body>
</html>
