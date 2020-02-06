
<?php  include("include/header.php");   include './connect.php';


  ?>

        <p>
          <br />
        </p>
        <?php
          if($_SESSION["em"] == "" ){
            echo ' <script type="text/javascript">window.location.replace("index.php") </script>';
          }else {

        ?>
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders alignCircleCenter">
              <h5 style="text-align: center;"><strong>Lecturers Note:</strong></h5>
              <?php
             $matrc = $_SESSION["em"];
                     $qy= "select * from user_reg where email='$matrc'";
                   $myqy = mysqli_query($mycon,$qy);
                  $row1 = mysqli_fetch_array($myqy);
                   $level = $row1["level"];


                   $mylevel= "select * from files where level='$level'";
                   $mylevel = mysqli_query($mycon,$mylevel);


                   while ($row = mysqli_fetch_array($mylevel)) {
                      $row["lecturer"];
              ?>
              <h2>LECTURER'S NAME: <?php echo $row["lecturer"];?></h2>
              <article><?php echo $row["note"];?></article>
              <h5><?php echo 'Tittle: '.$row["tittle"];?></h5>
              <h6><?php echo $row["date"];?></h6>
                   <?php

                   }?>
<!--            <div class="col-xs-6 col-sm-3 placeholder CircleDash">
              <h2><?php
  // *- *- *-00*-
   // //                $em = $_SESSION["em"];
//                $qy= "select id from files where userty='$em'";
//                   $myqy = mysqli_query($mycon,$qy);
//                   $intt = 0;
//                   while ($row = mysqli_fetch_array($myqy)) {
//                       //echo $row["id"];
//                       if($row["id"] %2 ==0){}
//                       else{
//                           $intt = $intt+1;
////                              echo $intt;
//                       }
//
//
//                   }
//                                  echo $intt;
//
//                   ?></h2>
              <b> Total Files</b>
            </div>

            <div class="col-xs-6 col-sm-3 placeholder CircleDash">
                <h2>//<?php
//                $em = $_SESSION["em"];
//                $qy= "select id from files where userty='$em'";
//                   $myqy = mysqli_query($mycon,$qy);
//                   $intt = 0;
//                   while ($row = mysqli_fetch_array($myqy)) {
//                       //echo $row["id"];
//                       if($row["id"] %2 ==0){
//
//                       }
//                       else{
//                           $intt = $intt+1;
//
//                   }
//
//                   }
//                                echo $intt;
                   ?></h2>
               <b> Total Files Upload</b>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder CircleDash">
               <h2><?php
//                $em = $_SESSION["em"];
//                $qy= "select id from down where usr='$em'";
//                   $myqy = mysqli_query($mycon,$qy);
//                   $intt = 0;
//                   while ($row = mysqli_fetch_array($myqy)) {
//                       //echo $row["id"];
////                       if($row["id"] %2 ==0){
//
////                       }
////                       else{
//                           $intt = $intt+1;

                   //}

//                   }
                                //echo $intt;
                   ?></h2>
                <b class="third"> Total Files Download</b>
            </div>-->
          </div>
           <h4 class="sub-header"><?php    // echo $em;  ?></h4>
          <br/>
          <br />

          <h1 class="sub-header">Upload Files on Server</h1>
          <br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tittle</th>
                  <th>Course Code</th>
                  <th>Level</th>
                  <th>Type</th>
                  <th>Name</th>
                  <th>Lecturer</th>
                  <th>date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <?php
                     //$em = $_SESSION["em"];
                $qy= "select * from files ";
                   $myqy = mysqli_query($mycon,$qy);
                   $intt = 0;
                   while ($row = mysqli_fetch_array($myqy)) {

                       //$intt = $intt+1;


                       //if(($row["id"] %1) ==0){

                                          //echo $intt;
                       //}  else {

//                           $row["filename"];
//                            $d = str_split($row["filename"]);
//                            $f= end($d);
                      // if($f == "f" || $f == "p" || $f == "P" || $f == "G"  ){
                             $intt = $intt+1;
                   ?>

                    <td><?php echo $intt;?></td>
                  <td><?php echo $row["tittle"];?></td>
                  <td><?php echo $row["cod"];?></td>
                  <td><?php echo $row["level"];?></td>
                  <td><?php echo $row["type"];//video?></td>
                  <td><?php echo $row["filename"];//video?></td>
                  <td><?php echo $row["lecturer"];//video?></td>
                  <td><?php echo $row["date"];//video?></td>
                  <td>
                  <?php  $_SESSION["path"] =  $row["filepath"];//video?>
                      <?php  $_SESSION["view"] = $row["filepath"];//video?>
                       <?php  $_SESSION["nee"] =  $row["filename"];   //video?>
                      <a href="new.php?package=<?php echo 'CouseWare/'.$row["filepath"];?>&pascel=<?php echo $row["filename"];?>" title="Download"  >
                  <i class="fa fa-cloud-download fa-lg"></i>
                      </a>  |
                  <a href="now.php?package=<?php echo 'CouseWare/'.$row["filepath"];?>&pascel=<?php echo $row["filename"];?>"  title="view"> <i class="fa fa-eye fa lg"></i></a></td>


                </tr>
                <?php

//                               }
//                   else if($f == "i" || $f == "4" || $f == "3"  ){

//                   $intt = $intt+1;

                ?>
<!--                    <td><?php //echo $intt;?></td>
                  <td>//<?php// echo $row["filename"];?></td>
                  <td>//<?php //echo "Video";//video?></td>
                  <td>//<?php //echo $row["date"];//video?></td>
                  <td>
                  //<?php// $_SESSION["path"] =  $row["filepath"];//video?>
                      //<?php //$_SESSION["view"] = $row["filepath"];//video?>
                       //<?php //$_SESSION["nee"] =  $row["filename"];   //video?>
                      <a href="down.php" title="Download"  >
                  <i class="fa fa-cloud-download fa-lg"></i>
                      </a> | <a href="delete.php" title="Delete" >
                  <i class="fa fa-trash fa-lg"></i></a> |
                  <a href="view.php"  title="View"> <i class="fa fa-eye fa lg"></i></a></td>


                </tr>-->
               <?php
//                                           }
//                                          elseif ($f == "c" || $f == "t" || $f == "f" || $f == "3" ) {
                                               $intt = $intt+1;

?>
<!--                  <td><?php //echo $intt;?></td>
                  <td><?php //echo $row["filename"];?></td>
                  <td><?php //echo "Text/Document";//video?></td>
                  <td><?php //echo $row["date"];//video?></td>
                  <td>
                  <?php //$_SESSION["path"] =  $row["filepath"];//video?>
                      <?php //$_SESSION["view"] = $row["filepath"];//video?>
                       <?php //$_SESSION["nee"] =  $row["filename"];   //video?>
                      <a href="down.php" title="Download"  >
                  <i class="fa fa-cloud-download fa-lg"></i>
                      </a> | <a href="delete.php" title="Delete" >
                  <i class="fa fa-trash fa-lg"></i></a> |
                  <a href="view.php"  title="View"> <i class="fa fa-eye fa lg"></i></a></td>


                </tr>-->
                <?php


        //}
                       }
                  // }
                   ///if(isset()){}

                  //echo $_GET["name"];
//                  if(count($_GET) <1){
//                      echo 'empty';
//                  }  else {
//                      echo 'full';
//}
                ?>
              </tbody>
            </table>
          </div>
<!--           <br />
          <h1 class="sub-header">Downloaded files Record</h1>
          <br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tittle</th>
                  <th>Course Code</th>
                  <th>Level</th>
                  <th>Type</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>-->
                    <?php
//                     //$em = $_SESSION["em"];
//                $qy= "select * from down  ";
//                   $myqy = mysqli_query($mycon,$qy);
//                   $intt = 0;
//                   while ($row = mysqli_fetch_array($myqy)) {
//                       //echo $row["id"];
//                       //$intt = $intt+1;
//

//                       if($row["id"] %2 ==0){

//                                          //echo $intt;
//                       }  else {
//                           $row["file"];
//                            $d = str_split($row["file"]);
//                            $f= end($d);
//                       //if($f == "f" || $f == "p" || $f == "P" || $f == "G" ){
//                             $intt = $intt+1;
//                   ?>
<!--
                    <td><?php// echo $intt;?></td>
                  <td><?php //echo $row["usr"];?></td>
                  <td><?php //echo $row["file"];?></td>
                  <td><?php //echo "Image";//video?></td>
                  <td><?php ///echo $row["date"];//video?></td>
                  <td>-->
                  <?php //$_SESSION["path"] =  $row["file"];//video?>
                      <?php //$_SESSION["view"] = $row["file"];//video?>
                       <?php //$_SESSION["nee"] =  $row["file"];   //video?>
<!--                      <a href="down.php" title="Download"  >
                  <i class="fa fa-cloud-download fa-lg"></i>
                      </a> | <a href="delete.php" title="Delete">
                  <i class="fa fa-trash fa-lg"></i></a> |
                  <a href="view.php"  title="View"> <i class="fa fa-eye fa lg"></i></a></td>


                </tr>-->




                  <?php
         //}
                ?>
<!--              </tbody>
            </table>
          </div>
         -->

          <div class="modal fade bs-example-modal-lg" id="modalAuth" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="z-index: 10000 !important">
            <div class="modal-dialog" style="z-index: 10000 !important">
              <div class="modal-content" >
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Account Authentication</h4>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                  <div class="form-group">
                  <label for=""> Authentication Key</label>
                  <input type="password" name="auth_Key" value="" class="form-control" required="true">
                </div>
                  <button class="btn btn-primary btn-block btn-custom" type="submit">Submit</button>
                </div>
                </form>
              </div>
              </div>
            </div>
          </div>


        </div>
      </div>



    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="javascript/bootstrap.min.js"></script>
      <script src="javascript/jquery.1.11.js"></script>
     <script src="javascript/modal.js"></script>
   <?php }?>
  </body>

</html>
