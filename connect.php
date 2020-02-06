<?php
ob_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host = "Localhost";
$user = "root";
 $password ="root";
 $database ="course";
 $port = "8080";
  $socket = "127.0.0.1";
//$mycon = mysqli_connect($host, $user, $password, $database, $port, $socket);
$mycon=mysqli_connect($host,$user,$password);
if (!$mycon){
    echo 'error';

}  else {
//     echo 'alert...';
    $getdb = mysqli_select_db($mycon,$database);
    if (!$getdb){
    echo 'error';

} else {
     echo 'alert...oooo';



}
}
