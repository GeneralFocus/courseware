
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"  data-target="#navbar" aria-expanded="false" aria-controls="navbar"class="active" data-toggle="modal" data-target=".bs-example-modal-lg">
<!--            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>fdfg
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>-->
             customer
          </button>
          <a class="navbar-brand" href="#">CourseWare</a>
        </div>
          <div id="navbar" style="height: 90px;" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
              <!--<li class="active" data-toggle="modal" data-target=".bs-example-modal-lg"><a href="view.php">Customers</a></li>
             <li class="active"  data-target=".bs-example-modal-lg"><a href="index.php">Home</a></li>-->
<li class="active"  data-target=".bs-example-modal-lg"><a href="view.php">Class</a></li>
              <li class="active"  data-target=".bs-example-modal-lg"><a href="mark.php">Upload</a></li>
              <li class="active"  data-target=".bs-example-modal-lg"><a href="profile.php">Edit Profile</a></li>
                            <li class="active"  data-target=".bs-example-modal-lg"><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




<!---modal-->
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="z-index: 10000 !important">
    <div class="modal-dialog" style="z-index: 10000 !important">
      <div class="modal-content" >
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"></h4>
      </div>
      <div class="modal-body">
          <form action="#" method="post" role="">
        <div class="form-group">
          <div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-inbox"></i></span>
  <input type="email" class="form-control" required="" name="email2" placeholder="Email" aria-describedby="basic-addon1">
</div>
</div>
<div class="form-group">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i> </span>
  <input type="text" name="fn" required="" class="form-control" placeholder="FirstName" aria-describedby="basic-addon1">
</div>
</div>
<div class="form-group">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i> </span>
  <input type="text" name="ln" required="" class="form-control" placeholder="LastName" aria-describedby="basic-addon1">
</div>
</div>
<!--<div class="form-group">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i> </span>
  <input type="password" name="pass2" required="" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
</div>
</div>
<div class="form-group">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i> </span>
  <input type="password" name="pass1" required="" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon1">
</div>
</div>-->
            <button class="btn btn-primary btn-block btn-custom" name="bnt_sb" type="submit" >Register</button>
        <!--<a href="">Forgot Password?</a>-->
        <?php
  //echo '---';
                if(isset($_POST['bnt_sb'])){

               //$email = $_POST['email2'];
                   $un =  $_POST['un'];
                   $pw =  $_POST['pw'];
//                   $email =  $_POST['email'];
//                   $unam =  $_POST['user'];
//        $cpsss =  $_POST['pass1'];
//        $psss1 =  $_POST['pass2'];
//                   echo ''.$unam.$pss;
//                   $filen =$_FILES["photo"]["name"];
//                   $filetmp =$_FILES["photo"]["tmp_name"];
//                   $destination = "upload_image/".$filen;
//                   move_uploaded_file($filetmp, $destination);
//                   $diretry = $destination;

                    // if($cpsss ==  $psss1){
                                                //  echo 'opess...';
                           $query= "select id from reg_customer where em='$email2'";
                   $myquey = mysqli_query($mycon,$query);

                  $row = mysqli_fetch_array($myquey);
//                       echo ''.$row['id'];
                     // $_SESSION["eid"] = $row['id'];


                   if( count($_row["id"])>0){

                       echo 'Email already in use..Please Try another';
                   }  else {
                        $djack= "insert into reg_customer values (null,'$email','$fn','$ln',now(),'0')";
                   $myinsert = mysqli_query($mycon,$djack);
                   if (!$myinsert) {
                       echo 'insertion error ';

                   }  else {
                       echo 'SUCCESSFUL  REGISTRATION ...Go SignUp';
                              echo '<script type="text/javascript">   window.arlert("SUCCESSFUL  REGISTRATION ...Go SignUp"); </script>';
                   }
                   }

//                     }else{
//                          echo 'Password must macth ....pls check and try again ';
//                     }

//                  $djack= "insert into user_reg values (null, '$fnam','$lnam','$unam','$psss','$email',now(),'$diretry','0')";
//                   $myinsert = mysql_query($djack);
//                   if (!$myinsert) {
//                       echo 'insertion error '.  die();
//
//                   }  else {
////                       echo 'SUCCESSFUL  REGISTRATION ...';
//                              echo '<script type="text/javascript">   window.alert("SUCCESSFUL  REGISTRATION ..."); </script>';
//                   }
//

//                   }

                }

                ?>
        </form>
      </div>
      </div>
    </div>
  </div>
