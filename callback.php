<html>
    <body> 
      <h1> CallBAck Function in Php </h1>
      <?php 
        
      /*  Function my_callback($item){
            return strlen($item);
        }

      $strings = ["apple", "orange", "banana", "cocunut"];
      
      $lengths = array_map("my_callback", $strings);
      print_r($lengths);  

      Function myfun($name){
          return $name();

      }

      echo myfun(Function(){
          return "Hello World";
      });  */

      Function f1($name){
          return $name . "!";
      }

      Function f2($edu){
          return $edu . "?";
      }

      Function CallBAck($name,$format){
          echo $format($name);
      }

      CallBAck("Himanshu Kumar", "f1");
      CallBAck("2nd Year0", "f2");
      ?>  
</body>
</html>