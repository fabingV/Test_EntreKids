<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Test EntreKids</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
	<link rel="stylesheet" href="tabla.css">
    <script src='main.js'></script>
</head>
<body>
    <h1 id="titulo"> Monto Mensual vendido por Proveedores y Tipo de Producto en Tabla</h1>
    <table>
        <thead>
            <th>Proveedor</th><th>Proveedor ID</th><th>Monto Mensual Vendido</th><th>Tipo de Producto</th>
        </thead>
        <tbody>
        <?php

    $archivo = fopen("query1.csv", "r");
    while(($data = fgetcsv($archivo)) == true) {
    ?>
       
 
        <tr><td><a href="admin.entrekids.cl/proveedor/id=<?=$data[1]?>"><?=$data[0]?></a></td><td><?=$data[1]?></td><td><?=$data[2]?></td><td><?=$data[3]?></td></tr>


    <?php
    }
    fclose($archivo);
    ?>

    
    </tbody>
    </table>
    <div id="p2">
    <h1 id="titulo"> Monto Mensual vendido por Proveedores y Tipo de Producto en lista modo json </h1>
            <?php




        $archivo = fopen("query1.csv", "r");


        while(($data = fgetcsv($archivo)) == true) {

            ?> <a href="admin.entrekids.cl/proveedor/id=<?=$data[1]?>"><?php echo "Nombre Proveedor: ".$data[0]."<br>";
            echo "ID Proveedor: ".$data[1]."<br>";
            echo "Total Vendido del mes: ".$data[2]."<br>";
            echo "Tipo de Producto: ".$data[3]."<br>";

            echo "<br>";
        }

        ?>
    </div>

   


</body>
</html>

