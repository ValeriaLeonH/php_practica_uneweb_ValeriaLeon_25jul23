<?php
  /*  PHP echo and print statement

    con PHP hay dos formas basicas de optener resultados: "echo" y "print"

    "echo " y "print " son mas o menos lo mismo. Ambos se utilizan para enviar datos a la pantalla. 
    
    Las diferencias son pequenas: 

      "echo" no tiene un valor de retorno  mientras que "print" tiene un valor de retorno de 1 por lo que puede usarse en expresiones. "echo" puede tomar multiples parametros (aunque tal uso es poco comun) mientras que "print" puede tomar un argumento. "echo" es marginalmente mas rapido que "print"
  */

  /*
      PHP echo statement

      la declaracion "echo" se puede utilizar con o sin parentesis: "echo" o "echo()". 

      Mostrar texto 

      El siguiente ejemplo muestra como generar texto con "echo" (observe que el texto puede contener marcado HTML)
  */

  echo "<h2>PHP es divertido </h2>";
  echo "Hola Mundo! <br>";
  echo "Estoy aprendiendo PHP!<br>";
  echo "Esta ", "es" , " una", " cadena", " de", " caracteres", " con", " multiples parametros";
?>