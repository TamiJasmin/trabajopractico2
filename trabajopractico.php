<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Punto UNO</h1>

    <?php
    $n1=10;
    $n2=0;
    echo "$n1 es mayor a $n2, por lo tanto $n1 es número positivo";
     ?>
     <hr>

     <h1>Punto DOS</h1>

     <?php
     $n1=8;
     $n2=10;
     echo "$n1 es mayor al número 1 pero menor a $n2";
      ?>
      <hr>

      <h1>Punto TRES</h1>


      <?php
      $n1=0;
      $n2=2;
      echo "$n1 es un número menor a $n2";
      ?>
      <hr>

      <h1>Punto 4 (SUMA)</h1>
      <?php
      $numero1=250;
      $numero2=300;
      $resultado=$numero1+$numero2;
      echo "$numero1+$numero2=$resultado";
       ?>
      <hr>
      <h1>Punto 4 (RESTA)</h1>
      <?php
      $numero1=250;
      $numero2=300;
      $resultado=$numero1-$numero2;
      echo "$numero1-$numero2=$resultado";
      ?>
      <hr>

      <?php
      $numero1=500;
      $numero2=250;
      $resultado=$numero1+$numero2;
      $resultado2=$numero1-$numero2;
      $resultado3=$numero1*$numero2;
      $resultado4=$numero1/$numero2;
      $resultado5=$numero1%$numero2;


      if ($numero1>$numero2) {
        // Bloque 1
        echo "$numero1+$numero2=$resultado";
        echo "$numero1-$numero2=$resultado2";
      }

    elseif ($numero1<$numero2) {
      echo "$numero1*$numero2=$resultado3";
      echo "$numero1/$numero2=$resultado4";
      echo "$numero1%$numero2=$resultado5";
    }

    else {
      ($numero1==$numero2);

      echo "Los Números Ingresados son Iguales";
    }

       ?>
  </body>
</html>
