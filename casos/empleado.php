<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTA DE PRODUCTO</title>
    <link rel="stylesheet" href="/TAREA_CA/estiloTA/estile.css">
    
</head>
<body>
        <header><h2>VENTA DE PRODUCTO</h2></header>
     
        <header> <img src="/TAREA_CA/imagenes/perfume.png" 
        >    </header>

    <section>
    
        <form action="empleado.php" method="post">
        <?php
        error_reporting(0);
        $cantidadd = $_POST['txtCantidad'];
        
        ?>
        <table
        border="0"
        cellpadding="0"
        cellspacing="0">
        <tr>
            <td
            width="50">Cantidad: </td>
            <td>
            <input type="text"
            name = "txtCantidad"
            size="20"
            value ="<?php
            echo $cantidadd;?>" >
            </td>

        </tr>
            <td>
                <input type="submit"
                value ="Procesar"
                name = "btnProcesar">
            </td>
             <td>
                 <input type="reset"
                    value="Limpiar"
                    name = "btnLimpiar">
            </td>

            <?php
            $importeCompra = $cantidadd*20.55;
            $importeDescuento = $importeCompra*0.10;
            $importeNeto = $importeCompra-$importeDescuento;
            ?>
            <tr>
                <td>
                    Precio_de_producto:
                </td>
                    <td>
                       $<?php 
                        echo $importeCompra ?>
                    </td>
            </tr>

            <tr>
                <td>Cantidad:</td>
                <td> $<?php echo $cantidadd; ?> </td>
            </tr>
            <tr>
                <td>Importe_de_compra:</td>
                <td> $<?php echo $importeCompra?></td>
            </tr>
            <tr>
                <td>Importe_de_descuento:</td>
                <td> $<?php echo $importeDescuento?></td>
            </tr>
            <tr>
                <td>Importe_neto:</td>
                <td> $<?php echo $importeNeto?></td>
            </tr>

        </table>
        </form>
    </section>
</body>
</html>