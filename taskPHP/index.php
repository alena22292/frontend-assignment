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
      $age = 28;
      echo $name . ' ' . $surname;
      echo "Age is $age <br>";
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
        // string methods: 
        $myString = "Hello World";

        strtolower($myString);
        strtoupper();
        strlen();
        // to retrieve the first character of the string:
        $myString[0];
        str_replace("World", "Home", $myString);
        // substring method takes at least two arguments var string, start position and the third one is optional as you want to retrieve specific number of characters 
        substr($myString, 8, 4);
      

        // num methods: 
        pow(2, 4);
        sqrt(144);
        abs();
        max();
        min();
        round();
        ceil();
        floor();

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

        // plain html tags: retrieve the input from the form(inside the square brackets puts the value of name):

        $_GET["name"];
        

        // Associative array (pair of key and values):
        $grades = array("Alena" => "A+", "Next" => "B");

        // take a note about key assignment:

        $array = array(
            1    => 'a',
            '1'  => 'b', // the value "a" will be overwritten by "b"
            1.5  => 'c', // the value "b" will be overwritten by "c"
            -1 => 'd',
            '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
            '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
            true => 'g', // the value "c" will be overwritten by "g"
            false => 'h',
            '' => 'i',
            null => 'j', // the value "i" will be overwritten by "j"
            'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
            2 => 'l', // the value "k" will be overwritten by "l"
        );
        // alternative to var_dump() is print_r();
        var_dump($array);
           
        // methods: 
        count($grades); 

    ?>
    <!-- GET -->
    <form method="get" action="index.php">
        <label id="name">Name: </labe>
        <input type="text" name="name">
        <label id="age">Age: </labe>
        <input type="text" name="age">
    </form>
    <!-- POST -->
    <form method="post" action="index.php">
        <label id="name">Password: </labe>
        <input type="text" name="password">
    </form>
    <!-- CHECKBOX -->
    <form action="index.php" method="post">
      Apples: <input type="checkbox" name="fruits[]" value="apples">
      Banana: <input type="checkbox" name="fruits[]" value="banana">
      Oranges: <input type="checkbox" name="fruits[]" value="oranges">
      <input type="submit">
    </form>
    <!-- Associative array -->
    
    <form action="index.php" method="post">
      Student name: <input type="text" name="student-name">
      <input type="submit">
    </form>

    <?php 
      $grades = array("Jim" => "B", "Lucas" => "D");
      $name = $_POST["student-name"];

       echo "<p>$name has the grade $grades[$name]</p>" 
      ?>
    <!-- Functions: -->
    <?php 
      function sayHello($name) {
        echo "<div>Hello, $name</div>";
      }

      sayHello("Alena");
    ?>

    <!-- Looping -->
    <?php 
      $myArray = array("green", "pink", "yellow");
      for($i = 0; $i <= count($myArray); $i++) {
        echo "$myArray[$i] <br>";
      }
    ?>

    <!-- IF condition -->
    <!-- Advanced escaping using conditions: if():, else:, endif; -->
    <?php 
      $expression = true;
      if ($expression):
    ?>
    <p>This will show if the expression is true</p>
    <?php else: ?>
    <p>Otherwise this will show</p>
    <?php endif; ?>

    <!-- Shortness works for looping: -->
    <?php for($i=0; $i < 5; $i++): ?>
      <p>Hello, Spain!</p>
    <?php endfor; ?>

    <!-- Print out without echo -->
    <?= "My name is Alena" ?>

    <!-- Classes and objects -->
    <?php
      class Book {
        // visibility modifiers: public(changeble) and private(unmutable)
        public $title;
        private $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages){
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }

        function isSmall(){
          if($this->pages <= 400){
            echo "This is a small book";
          } else {
            echo "This is a huge book";
          } 
        }
      }

      $book1 = new Book('Harry Potter', 'JK Rowling', 400);
      $book2 = new Book('Onegin', 'Alexander Pushkin', 700);
    ?>
    <!-- PHP constant -->
    <?php
      define("TITLE", "Constant and variables");
      echo TITLE;
    ?>
    <!-- To add another HTML files into the file -->
    <?php include "path/to/file" ?>
    <!-- It is possible to include another .php file with names of some variables in it and assigned them in the main file. -->

    <!-- with a post method you can't see your inputs in URL line -->
    <p>Hello <?php echo $_GET["name"]?>, your age is <?php echo $_GET["age"]?></p>
    
    <script src="/bundle.js"></script>
  </body>
</html>
