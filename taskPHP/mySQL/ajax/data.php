<?php 
  if (isset($_POST['data']) === true && empty($_POST['data']) === false) {
  	echo "Content";
  	// set up the connection with db
  	require "../db/connect.php";
		  	// content of the db-connection: 
		  	// mysql_connect('localhost', 'root', '');
		    //   mysql_select_db('DB_name');

  	$query = mysql_query("
  		SELECT `table-name`.`table-collumn-name`
  		FROM `table-name`
        WHERE `table-name`.`name` = '" . mysql_real_escape_string(trim($_POST['data'])) . "'
  		");
    // mysql_result(result-query, index-of-rows, 'column-name')
  	echo (mysql_num_rows($query) !== 0) ? mysql_result($query, 0, 'location') : "Result not found";
  }