<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beneficios Semana 1</title>
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

     <h1> Beneficios Semana 2</h1> <hr><br>




       <?php
         $gasto1 = $conexion->query("SELECT gasto,num_semana FROM gastos WHERE num_semana='2'");
         $contgasto1=0;
         while ($gastosem2=$gasto1->fetch_assoc()) {

           $contgasto1=$contgasto1+$gastosem2['gasto'];




     }
 ?>
     <?php
       $venta1 = $conexion->query("SELECT venta,num_semana FROM ventas WHERE num_semana='2'");
       $contventa1=0;
       while ($ventasem2=$venta1->fetch_assoc()) {

         $contventa1=$contventa1+$ventasem2['venta'];






   }

   $beneficio=$contventa1-$contgasto1;
   echo "El beneficio es: ".$beneficio;

  }
  ?>

  </body>
</html>
