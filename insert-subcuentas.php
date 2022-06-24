<!-- Comienza código: insert.php -->
<?PHP
require_once ("./db.php");

$sc_nombre       = $_POST["sc_nombre"];
$sc_codigo    = $_POST["sc_codigo"];
$id_c     = $_POST["id_c"];

  $query = "INSERT 
              INTO SUB_CUENTAS(
                  id_sc, 
                  sc_nombre, 
                  sc_codigo,
                  id_c)
              VALUE (
                  NULL,  
                  '$sc_nombre', 
                  '$sc_codigo',
                  '$id_c')";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro insertado")</script>';
    include ("./crud-subcuentas.php");
    } else {
      echo "Error: " . $query . "<br>" . $DB_conn->error;
      exit;
   }

  $_SESSION['message'] = "Éxito: se guardaron correctamente los datos en la base.";
  $_SESSION['message_type'] = "success";
header("Location: ./crud-subcuentas.php");


?>