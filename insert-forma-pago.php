<!-- Comienza código: insert.php -->
<?PHP
require_once ("./db.php");

$fp_nombre       = $_POST["fp_nombre"];
$fp_descripcion    = $_POST["fp_descripcion"];
$fp_codigo      = $_POST["fp_codigo"];

  $query = "INSERT 
              INTO FORMAS_DE_PAGO(
                  id_fp, 
                  fp_nombre, 
                  fp_descripcion,
                  fp_codigo)
              VALUE (
                  NULL,  
                  '$fp_nombre', 
                  '$fp_descripcion',
                  '$fp_codigo');";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro insertado")</script>';
    include ("./crud-forma-pago.php");
    } else {
      echo "Error: " . $query . "<br>" . $DB_conn->error;
      exit;
   }

  $_SESSION['message'] = "Éxito: se guardaron correctamente los datos en la base.";
  $_SESSION['message_type'] = "success";
header("Location: ./crud-forma-pago.php");


?>