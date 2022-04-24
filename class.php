<?php 
  class Fruits {
      public $name;
      public $color;
  }

  $furit1 = new Fruits();
  $furit1->name("Apple");
  $furit1->color("Red");

  echo $furit1 -> name();
?>