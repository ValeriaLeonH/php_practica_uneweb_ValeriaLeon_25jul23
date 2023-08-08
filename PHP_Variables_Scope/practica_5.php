<?php
  /*  PHP la palabra clave static 
    Normalmennte cuando se completa/ejecuta una funcion, se eliminan todas sus variables. Sin embargo, a veces queremos que NO se elimine una variable local. 
    
    Para que no se borren usamos la palabra clave "static"
  */

  

  function myTest(){
   static $x = 0;
   echo $x . "<br>"; 
   $x++;
  }
  
  myTest();
  myTest();
  myTest();
?>