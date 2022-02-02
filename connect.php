<?php
   $con = mysqli_connect("remotemysql.com", "userid", "password");
   
   if (!$con) {
      die('Could not connect: ' . mysqli_error());
   }
   $db_list = mysqli_list_dbs($con);

   while ($db = mysqli_fetch_object($db_list)) {
      echo $db->Database . "<br />";
   }
   mysqli_close($con);


         $dbhost = 'remotemysql.com:3306';
         $dbuser = 'guest';
         $dbpass = 'guest123';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_close($conn);
      ?>
?>