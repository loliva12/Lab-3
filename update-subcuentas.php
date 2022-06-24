<!-- Comienza código: update.php -->
<?PHP
include ("./db.php");

if(isset($_POST['update'])) {    
    $id_sc        = $_POST["id_sc"];
    $sc_nombre      = $_POST["sc_nombre"];
    $sc_codigo   = $_POST["sc_codigo"];
    $id_c      = $_POST["id_c"];

    $query = "UPDATE SUB_CUENTAS SET     sc_nombre = '$sc_nombre',
                                                  sc_codigo = '$sc_codigo',
                                                  id_c = '$id_c'
                                          WHERE   id_sc = $id_sc";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro actualizado")</script>';
    include ("./crud-subcuentas.php");
  } else {
    echo "Error updating record: " . $DB_conn->error;
    exit;
  }                         
  
    $_SESSION['message'] = "Éxito: se actualizaron correctamente los datos del registro en la base.";
    $_SESSION['message_type'] = "primary";
   
    header("Location: ./crud-subcuentas.php");
}

?>
