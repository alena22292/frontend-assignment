<?php
  define("TITLE", "Contact US | My Little Shop");
  include('includes/header.php');
?>

<div id="contact">
  <hr>

  <?php
    // Check for the header injection:
    function has_header_injection($str) {
       return preg_match("/[\r\n]/", $str);
    }
    // check if the button submit was pressed:
    if (isset($_POST['contact_submit'])) {
      // $_POST["field name"]:
      $name = trim($_POST["name"]);
      $email = trim($_POST["email"]);
      $message = $_POST["message"];

      // Check to see if $name or $email have a header injection:
      if (has_header_injection($name) || has_header_injection($email)) {
        die(); // if true, kill the script;
      }
    }
  ?>

  <h1>Get in touch with us</h1>
  <form action="" method="post" id="contact-form">
    <label for="name">Your Name<label>
    <input type="text" id="name" name="name">

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email">

    <label for="message">Message</label>
    <textarea name="message" id="message"></textarea>

    <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
    <label for="subscribe">Subscribe for newsletter</label>

    <input type="submit" name="contact_submit" class="button next" value="Send message">
  </form>
</div>
