<!-- Comienza código: update.php -->
<?PHP
include ("./db.php");

if(isset($_POST['update'])) {    
    $id_fp        = $_POST["id_fp"];
    $fp_nombre       = $_POST["fp_nombre"];
    $fp_descripcion    = $_POST["fp_descripcion"];
    $fp_codigo       = $_POST["fp_codigo"];

    $query = "UPDATE FORMAS_DE_PAGO SET    fp_nombre= '$fp_nombre',
                                    fp_descripcion = '$fp_descripcion',
                                    fp_codigo = '$fp_codigo'
                             WHERE  id_fp = $id_fp";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro actualizado")</script>';
    include ("./crud-forma-pago.php");
  } else {
    echo "Error updating record: " . $DB_conn->error;
    exit;
  }                         
  
    $_SESSION['message'] = "Éxito: se actualizaron correctamente los datos del registro en la base.";
    $_SESSION['message_type'] = "primary";
   
    header("Location: ./crud-forma-pago.php");
}

?>
