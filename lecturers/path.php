<?php

$lecture = $_SESSION["pcode"];
$git= "select * from lecture where staff_id ='$lecture'";
               $mgit = mysqli_query($mycon,$git);
               $intt = 0;
              $row1 = mysqli_fetch_array($mgit);

          $first = $row1["fn"];
;?>
<img src="<?php echo $row1["imagepath"];?>" style="width:100px;margin-left: 5px;height:100px; border-radius:50px;" alt="loading..." />
