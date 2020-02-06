<?php
ob_start();
session_start();
include './include/header.php';  include './connect.php'; ?>
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
            <h3> Register your special number,this number will be used in all form of file processing </h3><br/>
            <div class="form-group" >
                 <label for="inputemail">Email address:</label><br/>
                 <input class="form-control" type="text" name="email" required="" value="<?php echo $_SESSION["em"];?>" placeholder="Email.."  title="please enter your email" placeholder="Email.."/>
            
            </div>
            <div class="form-group" >
                 <label for="inputnum">Authentication  number:</label><br/>
                 <input class="form-control" type="text" name="num"  required="" placeholder="Unique number.."  title="please enter your email" placeholder="Email.."/>
            
            </div>
            
            
            <div class="form-group" >
                <button type="submit" name="snd" id="me"  class="btn-default">Send</button>
            </div>
         
           <?php
        // put your code here
        if(isset($_POST['snd'])){
               $email =  $_POST['email']; 
             $num =  $_POST['num'];
            
          if(strlen($num) != 4){
              echo 'Number must be in 4digit only'; 
          }
          else {
              //echo '========================';
              $r = sha1($num);
     $djack= "insert into mine values (null, '$email','$r',now(),'0')";
                 // echo '========================';
     $myinsert = mysql_query($djack);
     //echo '!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
                    if (!$myinsert) {
       //                 echo 'sssssssssssssssssssss';
                       echo 'insertion error '. die();
          //             echo '...................';
                   }
                   else {
            //           echo 'eeeeeeeeeeeeeeee';
                       echo 'SUCCESSFUL REGISTRATION OF YOUR SPECAIL NUMBER..'."<br/>";
                       echo '<a href="dashboard.php">Continue..</a>';
                             // echo '<script type="text/javascript">   window.location.replace("dashboard.php"); </script>';
                   }
}
              
        }
        ?>
            <a href="log.php">I Already have An Autnumber </a>
        </form>
        
        
        
    </body>
</html>
