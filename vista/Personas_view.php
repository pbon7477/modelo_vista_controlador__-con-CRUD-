<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include("modelo/paginacion.php");
    ?>

    <form action="modelo/insertar.php" method="POST">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th class="themp">-</th>
            </tr>
            <tr class="regIn">
                <td><input type="text" name="nom" id="nom" placeholder="ingrese el nombre..."></td>
                <td><input type="text" name="ape" id="ape"></td>
                <td><input type="text" name="dir" id="dir"></td>
                <td><input type="submit" name="cr" id="cr" value="InsertaR"></td>
            </tr>
        </table>
    </form>


    <!-- constructor de numeros de paginacion-->
    <div class="num_paginas">
        <?php
        for ($i = 1; $i <= $total_paginas; $i++) {
            echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
        }

        ?>
    </div>
    <!-- fin del constructor de numeros de paginacion -->


    <table>
        <tr>
            <th class="idN">id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th class="themp">-</th>
            <th class="themp">-</th>
        </tr>

        <?php foreach ($matrizPersonas as $persona): ?>
            <tr class="reg">
                <td class="idN">
                    <?php echo $persona["id"] ?>
                </td>
                <td>
                    <?php echo $persona["nombre"] ?>
                </td>
                <td>
                    <?php echo $persona["apellido"] ?>
                </td>
                <td>
                    <?php echo $persona["direccion"] ?>
                </td>

                <form action="modelo/borrar.php" method="GET">
                    <td class="btnDell reg">

                        <input type="hidden" name="id" value="<?php echo $persona["id"] ?>" id="id">
                        <input type="submit" name="del" id="del" value="borrar">
                        
                    </td>
                </form>

                <form action="vista/Personas_editar_view.php" method="GET">
                    <td class="btnAct reg">
                    <input type="hidden" name="id" value="<?php echo $persona["id"] ?>" id="id">
                    <input type="hidden" name="nom" value="<?php echo $persona["nombre"] ?>" id="nom">
                    <input type="hidden" name="ape" value="<?php echo $persona["apellido"] ?>" id="ape">
                    <input type="hidden" name="dir" value="<?php echo $persona["direccion"] ?>" id="dir">                          
                    <input type="submit" name="up" id="up" value="Actualizar">
                        
                    </td>
                </form>

            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>