<!-- Comienza código: update.php -->
<?PHP
include ("./db.php");

if(isset($_POST['update'])) {    
    $id_m        = $_POST["id_m"];
    $m_nombre      = $_POST["m_nombre"];
    $m_fecha   = $_POST["m_fecha"];
    $m_monto   = $_POST["m_monto"];
    $id_e      = $_POST["id_e"];
    $id_fp      = $_POST["id_fp"];
    $id_tm      = $_POST["id_tm"];
    $id_sc      = $_POST["id_sc"];

    $query = "UPDATE MOVIMIENTOS SET     m_nombre = '$m_nombre',
                                                  m_fecha = '$m_fecha',
                                                  m_monto = '$m_monto',
                                                  id_e = '$id_e',
                                                  id_fp = '$id_fp',
                                                  id_tm = '$id_tm',
                                                  id_sc = '$id_sc'
                                          WHERE   id_m = $id_m";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro actualizado")</script>';
    include ("./crud-movimientos.php");
  } else {
    echo "Error updating record: " . $DB_conn->error;
    exit;
  }                         
  
    $_SESSION['message'] = "Éxito: se actualizaron correctamente los datos del registro en la base.";
    $_SESSION['message_type'] = "primary";
   
    header("Location: ./crud-movimientos.php");
}

?>
