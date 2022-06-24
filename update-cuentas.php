<!-- Comienza código: update.php -->
<?PHP
include ("./db.php");

if(isset($_POST['update'])) {    
    $id_c        = $_POST["id_c"];
    $c_nombre      = $_POST["c_nombre"];
    $c_codigo   = $_POST["c_codigo"];

    $query = "UPDATE CUENTAS SET     c_nombre = '$c_nombre',
                                                  c_codigo = '$c_codigo'
                                          WHERE   id_c = $id_c";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro actualizado")</script>';
    include ("./crud-cuentas.php");
  } else {
    echo "Error updating record: " . $DB_conn->error;
    exit;
  }                         
  
    $_SESSION['message'] = "Éxito: se actualizaron correctamente los datos del registro en la base.";
    $_SESSION['message_type'] = "primary";
   
    header("Location: ./crud-cuentas.php");
}

?>
