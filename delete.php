<?php session_start();?>
<?php include './include/header.php';  include './connect.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            ul{
                display: none;
            }
            form{
                display: none;
            }
        </style>
        <link type="text/css" rel="stylesheet"  href="css/my.css"/>
    </head>
    <body>

      <?php
        if($_SESSION["em"] == "" ){
          echo ' <script type="text/javascript">window.location.replace("index.php") </script>';
        }else {

      ?>
        <div class="container">
            <h3> Searched Result...</h3>
            <hr/>
            <?php

   $mysearchvalue =  $_SESSION["name"];?>

 <?php



      $mylevel= "select * from files where level='$mysearchvalue' or lecturer='$mysearchvalue' or tittle = '$mysearchvalue' or type='$mysearchvalue' or cod='$mysearchvalue'";
      $mylevel = mysqli_query($mycon,$mylevel);

       $check = mysqli_fetch_array($mylevel);
       if(count($check["id"]) <1){
   // echo "string";
         ?>
         <p style="font-size:30px">No Match Result For Your Search...</p>
         <?php  // @princezzlolah,   @folahanmi_2,j_tappertz,highbeelicious omo iyami wfdjfabulous
       }else {
         $realsearch= "select * from files where level='$mysearchvalue' or lecturer='$mysearchvalue' or tittle = '$mysearchvalue' or type='$mysearchvalue' or cod='$mysearchvalue'";
         $realsearch1 = mysqli_query($mycon,$realsearch);
      while ($row = mysqli_fetch_array($realsearch1)) {
         $row["lecturer"];

 ?>
 <h2>LECTURER'S NAME: <?php echo $row["lecturer"];?></h2>
 <article style="font-family:monospace;"><?php echo $row["note"];?></article>
 <h5><?php echo 'Tittle: '.$row["tittle"];?></h5>
 <h6><i><b><?php echo $row["date"];?></i></b></h6>
      <?php

    }}?>
        </div>
<!--        <form class="form-signup" method="post" role="" action="" enctype="">
            <h3> verify your file processing via your AutNumber </h3><br/>
            <div class="form-group" >
                 <label for="inputemail">AutNumber:</label><br/>
                 <input class="form-control" type="text" name="num" required=""  placeholder="Specail number.."  title="please enter your email" placeholder="Email.."/>

            </div>

            </div>
            <div class="form-group" >
                <button type="submit" name="snd" id="me"  class="btn-default">Send</button>
            </div>

           <?php
        // put your code here
//        if(isset($_POST['snd'])){
//               $num =  $_POST['num'];
//               $gn = sha1($num);
//              $y1= "select email from mine where num='$gn'";
//                   $myy1 = mysql_query($y1);
//                   while($row1 = mysql_fetch_array($myy1)) {
//                         //echo ''.$row1['pass'];
//                         $p = $row1['email'];
//                        if(count($p)>0 ){
//                           // echo 'nbchnv.k';
//                            $_SESSION["em"] =$p;
//                            $f=$_SESSION["em"];
//                             $ok =$_SESSION["path"];
//                                  //  echo ' <script type="text/javascript">window.location.replace("upload.php") </script>';
//                                   // echo '<a href="'.$ok.'" download="" data-toggle="modal"><i class="fa fa-cloud-download fa-lg"></i>Start Download..</a>';
//                                   echo ''.$ok;
//                             $tar = "delete from files where filepath='$ok'";
//                                  echo 'kkkkk';
//                   $nam = mysql_query($tar);
//                   echo 'pppp';
//                   if (!$nam) {
//                       echo 'insertion error ';
//
//                   }else {
//                       echo '<a href="#" title="Delete" data-toggle="modal"><i class="fa fa-trash fa-lg"></i>File Deleted Succesful..</a>';
//                  // echo 'SUCCESSFUL  FILE UPLOAD ...';
//                            //   echo '<script type="text/javascript">   window.alert("SUCCESSFUL  FILE UPLOAD ..."); </script>';
//                   }
//                        }  else {
//                            echo 'AutNumber incorrect '. '';
//                        }
//                   }
//
//        }
        ?>
            <p></p> <p><a href="dashboard.php" >  << Back </a></p>

        </form>-->

<?php }?>
    </body>
</html>
