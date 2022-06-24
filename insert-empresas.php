<!-- Comienza código: insert.php -->
<?PHP
require_once ("./db.php");

$e_nombre       = $_POST["e_nombre"];
$e_cuit    = $_POST["e_cuit"];
$e_condicion_iva     = $_POST["e_condicion_iva"];

  $query = "INSERT 
              INTO EMPRESAS(
                  id_e, 
                  e_nombre, 
                  e_cuit,
                  e_condicion_iva)
              VALUE (
                  NULL,  
                  '$e_nombre', 
                  '$e_cuit',
                  '$e_condicion_iva');";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro insertado")</script>';
    include ("./crud-empresas.php");
    } else {
      echo "Error: " . $query . "<br>" . $DB_conn->error;
      exit;
   }

  $_SESSION['message'] = "Éxito: se guardaron correctamente los datos en la base.";
  $_SESSION['message_type'] = "success";
header("Location: ./crud-empresas.php");


?>