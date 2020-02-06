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
        // put your code here
       // print_r($_SESSION);
        if(isset($_POST['snd'])){
               $num =  $_POST['num'];
               $gn = sha1($num);
              $y1= "select email from mine where num='$gn'";
                   $myy1 = mysql_query($y1);
                  $row1 = mysql_fetch_array($myy1);
                         //echo ''.$row1['pass'];
                         $p = $row1['email'];
                        if(count($p)>0 ){
                           // echo 'nbchnv.k';
                            $_SESSION["em"] =$p;
                            $f=$_SESSION["em"];
                            $ok =$_SESSION["path"];
                                  //  echo ' <script type="text/javascript">window.location.replace("upload.php") </script>';
                                    echo '<a href="'.$ok.'"  data-toggle="modal"><i class="fa fa-eye fa lg"></i>View..</a>';    
                    
                        }  else {
                            echo 'AutNumber incorrect '. '';
                        }
   //                }  
              
        }
        ?>
            <p></p> <p><a href="dashboard.php" > 
        </form>
        
                                                                       << Back </a></p> 
        
    </body>
</html>
