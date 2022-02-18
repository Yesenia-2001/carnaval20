<html>
<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "hola") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into usuario(nombre1, nombre2, apellido1, apellido2, email) values ('$_REQUEST[nombre1]','$_REQUEST[nombre2]','$_REQUEST[apellido1]','$_REQUEST[apellido2]','$_REQUEST[email]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Su compra fue hecha con éxito.";
  ?>
</body>

</html>