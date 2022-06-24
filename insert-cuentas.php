<!-- Comienza código: insert.php -->
<?PHP
require_once ("./db.php");

$c_nombre       = $_POST["c_nombre"];
$c_codigo    = $_POST["c_codigo"];

  $query = "INSERT 
              INTO CUENTAS(
                  id_c, 
                  c_nombre, 
                  c_codigo)
              VALUE (
                  NULL,  
                  '$c_nombre', 
                  '$c_codigo')";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro insertado")</script>';
    include ("./crud-cuentas.php");
    } else {
      echo "Error: " . $query . "<br>" . $DB_conn->error;
      exit;
   }

  $_SESSION['message'] = "Éxito: se guardaron correctamente los datos en la base.";
  $_SESSION['message_type'] = "success";
header("Location: ./crud-cuentas.php");


?>