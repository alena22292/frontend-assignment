<?php
  define("TITLE", "Menu Item | My Little Shop");
  include ("includes/header.php");

  function strip_bad_chars($input) {
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
  }

  if (isset($_GET["item"])) {
    // clean up the input and protect from inappropriate inputs;
    $menuItem = strip_bad_chars($_GET["item"]);
    // $menuItems is predefined in the header;
    $dish = $menuItems[$menuItem];
  }

  function suggestedTip($price, $tip) {
    $totalTip = $price * $tip;
    echo money_format('%.2n', $totalTip);
  }
?>

<hr>

<div id="dish">
  <h1><?php echo $dish[title]; ?><span class="price"><sup>$</sup></span></h1>
  <p><em>Suggested Tip: <sup>$</sup><?php suggestedTip($dish[price], 0.2); ?></em></p>
</div>
