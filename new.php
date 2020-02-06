<?php session_start();?>
<?php  include("include/header.php");   include './connect.php';
?>
<br/><br/><br/><br/><br/>

<?php
$usern3= $_SESSION['em'];
   $package = $_GET["package"];
   $pascel = $_GET["pascel"];

$tar = "insert into down values(null,'$usern3','$pascel',now(),'download')";
           $nam = mysqli_query($mycon,$tar);
           if (!$nam) {
               echo 'insertion error ';

           }  else {
           //echo 'SUCCESSFUL...';
                    //   echo '<script type="text/javascript">   window.alert("SUCCESSFUL  FILE UPLOAD ..."); </script>';
           }

?>
<a href="<?php echo $package;?>"  title="download"> <i class="fa fa-download fa lg"></i></a></td>Now Download
