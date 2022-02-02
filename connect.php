<?php
   $con = mysqli_connect("remotemysql.com", "xsoVo3Usy6", "op2tUkCQBA", "attendance");
   
   if (!$con) {
      die('Could not connect: ' . mysqli_error());
   }
   $db_list = mysqli_list_dbs($con);

   while ($db = mysqli_fetch_object($db_list)) {
      echo $db->Database . "<br />";
   }
   mysqli_close($con);


         $dbhost = 'remotemysql.com:3306';
         $dbuser = 'xsoVo3Usy6';
         $dbpass = 'op2tUkCQBA';
         $dbname = 'attendance';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_close($conn);
      ?>
?>
