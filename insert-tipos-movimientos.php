<!-- Comienza código: insert.php -->
<?PHP
require_once ("./db.php");

$tm_nombre       = $_POST["tm_nombre"];
$tm_descripcion    = $_POST["tm_descripcion"];

  $query = "INSERT 
              INTO TIPOS_DE_MOVIMIENTOS(
                  id_tm, 
                  tm_nombre, 
                  tm_descripcion)
              VALUE (
                  NULL,  
                  '$tm_nombre', 
                  '$tm_descripcion')";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro insertado")</script>';
    include ("./crud-tipos-movimientos.php");
    } else {
      echo "Error: " . $query . "<br>" . $DB_conn->error;
      exit;
   }

  $_SESSION['message'] = "Éxito: se guardaron correctamente los datos en la base.";
  $_SESSION['message_type'] = "success";
header("Location: ./crud-tipos-movimientos.php");


?>