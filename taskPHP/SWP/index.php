<?php
  define("TITLE", "Menu Item | My Little Shop");
  include ("includes/header.php");

  function strip_bad_chars($input) {
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
  }
?>
