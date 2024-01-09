<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD - Actualizar</title>
  <link rel="stylesheet" type="text/css" href="../css/style_crud.css">
  
</head>

<body>

<?php

  include("../modelo/conectar.php");
  $base = Conectar::conexion();
  
  if (!isset($_POST["bot_actualizar"])) {

    $id = $_GET["id"];
    $nom = $_GET["nom"];
    $ape = $_GET["ape"];
    $dir = $_GET["dir"];

  } else {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $ape = $_POST["ape"];
    $dir = $_POST["dir"];

    $sql = "UPDATE datos_usuarios SET nombre=:miNom, apellido=:miApe, direccion=:miDir WHERE id=:miId";

    $resultado = $base->prepare($sql);

    $resultado->execute(array(
      ":miId" => $id,
      ":miNom" => $nom,
      ":miApe" => $ape,
      ":miDir" => $dir));
    
    header("Location:../index.php");
  }

  ?>


  <header>
    <div class="container">
      <h1>CRUD </h1>
      <h5>Create Read Update Delete </h5>
      <h5>ACTUALIZAR</h5>
    </div>
  </header>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table>
      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th class="themp">-</th>
      </tr>
      <tr class="regIn">
        <td><input type="text" name="id" id="id" value="<?php echo $id ?>" readonly></td>
        <td><input type="text" name="nom" id="nom" value="<?php echo $nom ?>"></td>
        <td><input type="text" name="ape" id="ape" value="<?php echo $ape ?>"></td>
        <td><input type="text" name="dir" id="dir" value="<?php echo $dir ?>"></td>
        <td><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
      </tr>

    </table>
  </form>



  <footer>

    <button><a href="../index.php" target="_self">No voy a actualizar nada. Quiero volver</a></button>

  </footer>
</body>

</html>