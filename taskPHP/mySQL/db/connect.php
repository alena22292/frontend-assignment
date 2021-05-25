<?php 
  // set up the data base info in the constant variables
  DEFINE("DB_USER", "studentweb");
  DEFINE("DB_PASSWORD", "root");
  DEFINE("DB_HOST", "localhost");
  DEFINE("DB_NAME", "names");

  //  mysql_connect('localhost name', 'username', 'password') must be separated from the other files
  $db_connection = mysql_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME)
  OR die("Could not connect to my SQL " . 
     mysql_connect_error());
  // mysql_select_db('DB_name');
 ?>