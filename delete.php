<?php
require_once ('connect.php');

$ID = $_GET['ID'];

$DeleteSql = " DELETE FROM `user` WHERE `ID` = '$ID' ";

$del= mysqli_query($connection,$DeleteSql);
if($del)
 {
    echo 'Data Deleted successfully';
  }
else
  {
    echo 'Data not found';
  }
?>
