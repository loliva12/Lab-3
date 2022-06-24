<!-- Comienza código: update.php -->
<?PHP
include ("./db.php");

if(isset($_POST['update'])) {    
    $id_e        = $_POST["id_e"];
    $e_nombre       = $_POST["e_nombre"];
    $e_cuit    = $_POST["e_cuit"];
    $e_condicion_iva       = $_POST["e_condicion_iva"];

    $query = "UPDATE EMPRESAS SET    e_nombre= '$e_nombre',
                                    e_cuit = '$e_cuit',
                                    e_condicion_iva = '$e_condicion_iva'
                             WHERE  id_e = $id_e";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro actualizado")</script>';
    include ("./crud-empresas.php");
  } else {
    echo "Error updating record: " . $DB_conn->error;
    exit;
  }                         
  
    $_SESSION['message'] = "Éxito: se actualizaron correctamente los datos del registro en la base.";
    $_SESSION['message_type'] = "primary";
   
    header("Location: ./crud-empresas.php");
}

?>
