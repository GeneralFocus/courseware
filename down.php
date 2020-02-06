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
        </style>
        <link type="text/css" rel="stylesheet"  href="css/my.css"/>
    </head>
    <body>
      <?php
        if($_SESSION["em"] == "" ){
          echo ' <script type="text/javascript">window.location.replace("index.php") </script>';
        }else {

      ?>
        <form class="form-signup" method="post" role="" action="" enctype="">
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
              echo  "     ". $myfilee = $_SESSION["nee"]."  " .$ok =$_SESSION["path"];;

        // put your code here
        if(isset($_POST['snd'])){
               $num =  $_POST['num'];
               $gn = sha1($num);
              $y1= "select email from mine where num='$gn'";
                   $myy1 = mysql_query($y1);
                   while($row1 = mysql_fetch_array($myy1)) {
                         //echo ''.$row1['pass'];
                         $p = $row1['email'];
                        if(count($p)>0 ){
                           // echo 'nbchnv.k';
                            $_SESSION["em"] =$p;
                            $f=$_SESSION["em"];
                             $ok =$_SESSION["path"];
                               $myfilee  =  $_SESSION["nee"];
                                  //  echo ' <script type="text/javascript">window.location.replace("upload.php") </script>';
                                    echo '<a href="'.$ok.'" download="" data-toggle="modal"><i class="fa fa-cloud-download fa-lg"></i>Start Download..</a>';
                                  $tar = "insert into down values(null,'$f','$myfilee',now(),'download')";
                   $nam = mysql_query($tar);
                   if (!$nam) {
                       echo 'insertion error ';

                   }  else {
                   echo 'SUCCESSFUL...';
                            //   echo '<script type="text/javascript">   window.alert("SUCCESSFUL  FILE UPLOAD ..."); </script>';
                   }
                        }  else {
                            echo 'AutNumber incorrect '. '';
                        }
                   }

        }
        ?>
            <p></p> <p><a href="dashboard.php" >
        </form>

                                                                       << Back </a></p>
        <?php } ?>
    </body>
</html>
