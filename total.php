<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Total</title>
  </head>
  <body>

    <?php

  //Me conecto a la base de datos
  $conexion = new mysqli("localhost", "root", "", "beneficios");
  if ($conexion->connect_errno) {
  //Si falla sale este mensaje de error
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    //Si funciona pasa esto
  }else {

     ?>

     <h1> Ventas y Gastos por semana</h1> <hr><br>




       <?php
         $totalVentas = $conexion->query("SELECT venta, num_semana FROM ventas WHERE num_semana='1'");
         echo "<h2> Total Ventas Semana 1</h2>";
         while ($total=$totalVentas->fetch_assoc()) {

           echo $total['venta'];
           echo "<br>";



     }

 ?>
     <?php
       $totalVentas2 = $conexion->query("SELECT venta, num_semana FROM ventas WHERE num_semana='2'");
       echo "<h2> Total Ventas Semana 2</h2>";
       while ($total=$totalVentas2->fetch_assoc()) {


         echo $total['venta'];
         echo "<br>";



   }
 ?>



          <?php
            $totalGastos = $conexion->query("SELECT gasto, num_semana FROM gastos WHERE num_semana='1'");
            echo "<h2> Total Gastos Semana 1</h2>";
            while ($total=$totalGastos->fetch_assoc()) {

              echo $total['gasto'];
              echo "<br>";



        }

    ?>
        <?php
          $totalGastos2 = $conexion->query("SELECT gasto, num_semana FROM gastos WHERE num_semana='2'");
          echo "<h2> Total Gastos Semana 2</h2>";
          while ($total=$totalGastos2->fetch_assoc()) {


            echo $total['gasto'];
            echo "<br>";



      }




  }

  ?>

  </body>
</html>
