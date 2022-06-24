<!-- Comienza código: insert.php -->
<?PHP
require_once ("./db.php");

$m_nombre       = $_POST["m_nombre"];
$m_fecha    = $_POST["m_fecha"];
$m_monto    = $_POST["m_monto"];
$id_e     = $_POST["id_e"];
$id_fp     = $_POST["id_fp"];
$id_tm     = $_POST["id_tm"];
$id_sc     = $_POST["id_sc"];

  $query = "INSERT 
              INTO MOVIMIENTOS(
                  id_m, 
                  m_nombre, 
                  m_fecha,
                  m_monto,
                  id_e,
                  id_fp,
                  id_tm,
                  id_sc)
              VALUE (
                  NULL,  
                  '$m_nombre', 
                  '$m_fecha',
                  '$m_monto',
                  '$id_e',
                  '$id_fp',
                  '$id_tm',
                  '$id_sc')";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro insertado")</script>';
    include ("./crud-movimientos.php");
    } else {
      echo "Error: " . $query . "<br>" . $DB_conn->error;
      exit;
   }

  $_SESSION['message'] = "Éxito: se guardaron correctamente los datos en la base.";
  $_SESSION['message_type'] = "success";
header("Location: ./crud-movimientos.php");


?>