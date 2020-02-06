<?php session_start();?>
<?php include './connect.php'; //echo "string";?>
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
    <link href="css/main.css" rel="stylesheet">

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

      <?php
        if($_SESSION["em"] == "" ){
          echo ' <script type="text/javascript">window.location.replace("index.php") </script>';
        }else {

      ?>
 <?php include 'include/header.php';
// print_r($_SESSION);
 $username = $_SESSION['em'];
  //$username;
  $gh= "select * from user_reg where email='$username' ";
                   $gh2 = mysqli_query($mycon,$gh);
                   $raps = mysqli_fetch_array($gh2);
          $my_id_ = $raps['id'];
          //echo $my_id_;
 ?>

      <!--div class="container">
          <br/>
          <br/>
            <br/>
          <form class="form-signup" action="" method="post" enctype="multipart/form-data">
        <h4 class="form-signin-heading">Welcome to Class:  <?php /**$lecture = $_SESSION["pcode"];
         $query2 ="select * from lecture where staff_id = '$lecture'";
             $select2 = mysqli_query($mycon, $query2);
             $row = mysqli_fetch_array($select2);
              $fullname = $row["fn"].' '.$row["ln"];
              $idd = $row["id"];
              echo $fullname;**/
        ?></h4>
        <!--div class="form-group">
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
        </div -->
        <!--div class="form-group">
          <label for="inputEmail">Note on Material:</label>
          <textarea  id="inputEmail" name="note" class="form-control" placeholder="Note on Material..." required autofocus>

          </textarea>
        </div>
            <div class="form-group">
                <label for="inputEmail">Upload Material For Class<i class="fa fa-upload"></i></label>
                <input type="file" id="inputEmail" name="file"class="form-control"  required autofocus>
        </div-->

<!--        <div class="form-group">
          <label>Confirm Password </label>
          <input type="password" id="confirmPassword" name="cpass" class="form-control" placeholder="Confirm Password" required >
        </div>-->
<!--        <button class="btn btn-lg btn-primary btn-block btn-custom" name="bnt_na" type="submit">Search</button>
        <button class="btn btn-lg btn-primary btn-block btn-custom" name="Mark" type="submit">Mark</button>    -->
        <!--button class="btn btn-lg btn-primary btn-block btn-custom" name="oa" type="submit">Upload</button-->
    <?php
    /*      $class = $_GET['class'];
          //echo $class;
         if(isset($_POST["oa"])){

            /* $tit = $_POST["tit"];
                $ccd = $_POST["ccd"];
                 $lev  = $_POST["lev"];
                  $mat = $_POST["mat"]; **/
              /*    $note = $_POST["note"];

                  $name = $_FILES["file"]["name"];
                  $tmp_name = $_FILES["file"]["tmp_name"];
                  $destination = "upload_files/".$name;
                   move_uploaded_file($tmp_name, $destination);
                   $diretry = $destination;

             $ 1 = "insert into material_class values(null,'$note','$name','$destination','$class','$fullname',now(),'0')";
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


}**/
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
<!--        <h3 style="padding: 10px;border: 2px solid #9b9bea;border-top-left-radius: 15px;border-bottom-right-radius: 15px;background-color: lightblue;">This Account has been Closed For The Month <img src="upload_files/3.png" alt="close"/></h3>-->
        <?php

//                   }
//                   else{


      ?>
        <br/>


        </form>

              <div class="table-responsive">

          </div>
  </div -->
<br/><br/>
  <div class="container" style="background-color:lightgrey;border:2px solid gray;border-radius:5px;">
      <h3>  <?php //echo "Users Matric Number:  ".$username;
           $lec = $_GET['lec'];

           $xd= "select * from lecture where staff_id='$lec'";
              $xdc = mysqli_query($mycon,$xd);
              $rovc = mysqli_fetch_array($xdc);

        ?></h3>
        <h4><i><?php   echo "Class Created By: ".$rovc["fn"]." ".$rovc["ln"];?></i></h4><hr/>
    <h3 style="text-align:left;font-family:monospace;border-bottom:2px solid grey;">..Materials..</h3>
          <?php
        //  $one = 0;
$class = $_GET['class'];
                          $qy= "select * from material_class where class_id='$class'";
                             $myqy = mysqli_query($mycon,$qy);
                             $intt = 0;
                             while ($row = mysqli_fetch_array($myqy)) {
                            $intt = $intt + 1;
                            //echo 'pppp';
                            if($intt === 0){
                              echo "<p>No Materials Yet</p>";
                            }else {

          ?>
          <h4 ><?php echo $intt.". ". $row['file'];?></h4><i ><?php echo "      ".$row['date']?></i><a href="<?php echo './upload_files/'.$row["file"];?>" title="Download"  >
      <i class="fa fa-cloud-download fa-lg"></i>
          </a> <hr/>
        <?php

        // code...
      }}?>
  </div>
<br/>

    <div style="background-color: #afafaa;color: white;padding: 25px;border-radius: 5px;border: 1px solid;" class="container">
      <h4 style="text-align:center;border-bottom: 2px solid;"><p>Comment</p></h4>
            <?php
          //  $one = 0;

      //echo $class.'mgfjygfj
      //echo "string".$class;
                            $qy= "select * from class_chat where class_id = '$class' ";
                               $myqy = mysqli_query($mycon,$qy);
                               $intt = 0;
                               while ($row = mysqli_fetch_array($myqy)) {
                              $intt = $intt + 1;
                              $stuu_id=$row["stu_id"];
            //echo $row["lec_id"].' oo ' . $idd;
            //print_r($_SESSION);
            //echo $row["lec_id"]."string-".$lec_id_.'iiii';
               $you = $_SESSION['lecct'];
            // if($row["lec_id"] == $you){
            ?>
            <!--div class="row" >
            <img src="./images/Preloader_8.gif" alt="Profile"/>
            <h3><?php echo  $row['s_msg'];?></h3><i><?php echo "      ".$row['date']?></i><hr/>
          </div-->
          <?php
        //}elseif($row["stu_id"] == $my_id_){
          // code...

          ?>
          <div class="row" >
            <?php
            $fot= "select * from user_reg where id = '$stuu_id' ";
               $giy = mysqli_query($mycon,$fot);
               //$intt = 0;
                $data = mysqli_fetch_array($giy);
                //echo ;
                if(count($data['id']) < 1){
            ?>
            <?php //$matric =  $row['r_msg'];
            $pc12= "select * from lecture where staff_id='$lec' ";
               $pc11 = mysqli_query($mycon,$pc12);
               $rox1 = mysqli_fetch_array($pc11);
             ?>
          <img src="./upload_files/<?php echo $rox1['imagename'];?>" style="border:1px solid; width:60px;height:60px;" alt="Profile"/>
          <h3><?php echo  $row['s_msg'];?></h3>
          <p><?php echo "Lecturer:      ".$row['r_msg']?></p>
          <i><?php echo "      ".$row['date']?></i><hr/>
        <?php }else{ ?>
          <img src="./upload_files/<?php echo $data['name'];?>" style="width:60px;height:60px;" alt="Profile"/>
          <h3><?php echo  $row['s_msg'];?></h3>
          <p><?php echo "Matric Number:      ".$row['r_msg'];?></p>
          <i><?php echo "      ".$row['date'];?></i>
          <hr/>
      <?php  } ?>
        </div>
      <?php //}
    }?>

              <div class="roll">
                  <br/>
                  <br/>
                    <br/>
                  <form class="form-signup" action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="inputEmail">Reply:</label>
                  <textarea  id="inputEmail" name="notereply" class="form-control" placeholder="Reply..." required autofocus>

                  </textarea>
    <br/>
                <button class="btn btn-lg btn-primary btn-block btn-custom" style="background-color:#101010;" name="reply" type="submit"><i class="fa ">Send<i></button>
            <?php
            //print_r($_SESSION);
                  $class = $_GET['class'];
                  $lec = $_GET['lec'];
                  //echo $lec;
                  $gh4= "select * from lecture where staff_id='$lec' ";
                                   $gh42 = mysqli_query($mycon,$gh4);
                                   $rap1 = mysqli_fetch_array($gh42);
                          $lec_id_ = $rap1['id'];
                          $_SESSION['lecct']= $lec_id_;

                 if(isset($_POST["reply"])){

                    /* $tit = $_POST["tit"];
                        $ccd = $_POST["ccd"];
                         $lev  = $_POST["lev"];
                          $mat = $_POST["mat"]; **/
//echo 'iii'.$my_id_;
                          $notereply = $_POST["notereply"];
                            $timedate = date("h").'/'.date("m");

                     $insert12 = "insert into class_chat values(null,'$my_id_','$lec_id_','$class','$notereply','$username','$timedate',now(),'0')";
                    $gop12 = mysqli_query($mycon,$insert12);
                    if(!$gop12){
                       echo '     <p>Something Happened You where unable to Upload, Try Again... </p>';
                    }
                    else {
                    //echo '     <script type="text/javascript">window.alert("Upload Completed!");</script>';
        }


                 }

                              ?>

                <br/>


                </form>


          </div>
    </div>


               <?php
                   //}
//                }

                ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="javascript/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascript//bootstrap.min.js"></script>
    <script src="javascript/jquery.1.11.js"></script>
   <script src="javascript/modal.js"></script>
 <?php }?>
  </body>
</html>
