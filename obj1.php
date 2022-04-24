<?php 
  class fruit {
      public $name;
      public $color;

      // method
      function set_name($name) {
          $this ->name = $name;
      }
      function get_name(){
          return $this -> name;
      }
  }

  $apple = new fruit();
  $banana = new fruit();
  $apple->set_name('aaple');
  $banana->set_name('Banana');

  echo $apple->get_name();
  echo "<br>";
  echo $banana->get_name();

  // here is the example of the object and class in php and 
?>