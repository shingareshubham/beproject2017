<?php
   /* define('DB_SERVER', '202.52.134.52');
   define('DB_USERNAME', 'dypuser');
   define('DB_PASSWORD', 'dyppass');
   define('DB_DATABASE', 'dyp');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) ;
  $con = mysqli_connect("202.52.134.52","user1","user1pass","db_contact") or dia (mysqli_error());*/

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'water');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) ;
?>


