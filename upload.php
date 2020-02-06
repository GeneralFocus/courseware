<?php session_start(); ?>
<?php
  include("include/header.php");  include './connect.php';
?>
<br/>
<br/>
<br/>
<?php
  if($_SESSION["em"] == "" ){
    echo ' <script type="text/javascript">window.location.replace("index.php") </script>';
  }else {

?>
<div class="container">
  <h2 align="center">Upload File</h2>
     <div id="dropzone">
        <br/>
        <form action="#" class="dropzone" method="post">
          <div class="fallback">
            <input name="file" type="file"   />
          </div>
             <button class="btn btn-success btn-lg" name="uplaod" >
           <i class="fa fa-upload fa-lg"></i>Click to Upload
        </button>
        </form>
        <!--<input id="my-file-selector" type="file">-->

        <?php  //print_r($_SESSION);


     ?>
        <?php

   // print_r($d);
        if(isset($_POST["uplaod"])){

               $em = $_SESSION["em"];
                 $filen =$_FILES["file"]["name"];
              $filetmp =$_FILES["file"]["tmp_name"];
                   $destination = "upload_files/".$filen;
                   move_uploaded_file($filetmp, $destination);
                   $diretry = $destination;

                  $tar = "insert into files values(null,'$em','$filen','$diretry','$em',now(),'0')";
                   $nam = mysql_query($tar);
                   if (!$nam) {
                       echo 'insertion error '.  die();

                   }  else {
                   echo 'SUCCESSFUL  FILE UPLOAD ...';
                            //   echo '<script type="text/javascript">   window.alert("SUCCESSFUL  FILE UPLOAD ..."); </script>';
                   }
                  }
        ?>

     </div>
    </div>


    <script src="javascript/dropzone.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/jquery.1.11.js"></script>
   <script src="javascript/modal.js"></script>
 <?php } ?>
  </body>
</html>
