<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Redux boilerplate</title>
  </head>
  <body>  
    <?php

    // Function;

       function myTest() {
        static $x = 0;
        echo $x;
        $x++;
      }
      
      myTest();
      echo '<br>';
      
      // Concatination sign '.';
      echo "Hello World!"."<p>May I enter here</p>";

      // comments
      # also comments
      /*
      multyline comments
      */
      
      // Variables
      $name = 'Alena';
      $surname = 'Gr';
      echo $name . ' ' . $surname;
      echo '<br>';
      
      // Variable types:
      $string = 'String';
      $integer = 34;
      $float = 2.5; // Double
      /* Boolean variable converted while printing into number 1 if it is true; or an empty string if it is false;
      */
      $boolean = true; // false
      $null = null;
      $array = ['string', 34];
      $object = null;
      $resource = null; 

      echo $array.'<br>';
      echo gettype($resource).'<br>';

      // Check the variable content: var_dump; Also debugging process;
      var_dump($array).'<br>';
      /*
      output => array(2) { [0]=> string(6) "string" [1]=> int(34) };
      */

      // Useful methods to check up the variable type:
        echo is_string($string);
        /* 
        is_bool();
        is_int();
        is_double;
        */

        // Check if the var is defined:
        echo isset($hot);

        // Constants: (name, value)
        define('PI', 3.141592);
        echo '<p>'.PI.'<p>';

        // Build-in PHP constants:
        echo SORT_ASC; // sort a number in ascending order;
        echo PHP_INT_MAX;

        // Increment operator:
        $a = 5;

        echo $a++; // print $a => 5; then increased the value $a = 6;
        echo ++$a;  // firstly $a+1 then printed out => 7;
        
        // Run into server:
        // => php -S localhost:4000
        // On the web-page: http://localhost:4000/php-project/index.php
    ?>
    <script src="/bundle.js"></script>
  </body>
</html>
