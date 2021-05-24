<?php 
  // set up the data base info in the constant variables
  DEFINE("DB_USER", "studentweb");
  DEFINE("DB_PASSWORD", "root");
  DEFINE("DB_HOST", "localhost");
  DEFINE("DB_NAME", "names");

  //  mysql_connect('localhost name', 'username', 'password') must be separated from the other files
  mysql_connect('localhost', 'root', '');
  mysql_select_db('DB_name');
 ?>