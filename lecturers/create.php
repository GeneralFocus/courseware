<?php session_start();?>
<?php include '../connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Courseware</title>

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
    <br/>
    <br/><br/><br/>

    <!-- Modal Body -->
          <?php include'./path.php';?>
    <h1 class="sub-header">Analysis</h1>
          <br />

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Student</th>
                  <th>file</th>

                  <th>Date/Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <?php

                $qy= "select * from down  ";
                   $myqy = mysqli_query($mycon,$qy);
                   $intt = 0;
                   while ($row = mysqli_fetch_array($myqy)) {
                       //echo $row["id"];
                       //$intt = $intt+1;



                         $intt = $intt+1;
                   ?>

                    <td><?php echo $intt;?></td>
                    <td><?php echo $row["usr"];?></td>
                  <td><?php
                 $cus= $row["file"];
                 //$cus1 = str_rot13($cus);
                 echo $cus;
                 ?></td>

                  <td><?php echo $row["date"];//video?></td>


                </tr>
                <?php
                       //}
                   }
                ?>


              </tbody>
            </table>
          </div>

       <br/>
        <!--<-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../javascript/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../javascript//bootstrap.min.js"></script>
    <script src="../javascript/jquery.1.11.js"></script>
   <script src="../javascript/modal.js"></script>
  </body>
</html>
