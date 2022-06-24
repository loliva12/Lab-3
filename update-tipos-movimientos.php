<!-- Comienza código: update.php -->
<?PHP
include ("./db.php");

if(isset($_POST['update'])) {    
    $id_tm        = $_POST["id_tm"];
    $tm_nombre      = $_POST["tm_nombre"];
    $tm_descripcion    = $_POST["tm_descripcion"];

    $query = "UPDATE TIPOS_DE_MOVIMIENTOS SET     tm_nombre = '$tm_nombre',
                                                  tm_descripcion = '$tm_descripcion'
                                          WHERE   id_tm = $id_tm";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro actualizado")</script>';
    include ("./crud-tipos-movimientos.php");
  } else {
    echo "Error updating record: " . $DB_conn->error;
    exit;
  }                         
  
    $_SESSION['message'] = "Éxito: se actualizaron correctamente los datos del registro en la base.";
    $_SESSION['message_type'] = "primary";
   
    header("Location: ./crud-tipos-movimientos.php");
}

?>
