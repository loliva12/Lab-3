<!-- Comienza código: delete.php -->
<?PHP

require_once ("./db.php");

if($_GET['id_c']) {
    $id_c = $_GET['id_c'];
    $query = "DELETE FROM CUENTAS
                WHERE id_c = $id_c";

if ($DB_conn->query($query) === TRUE) {
  echo '<script>alert("Borrado exitoso")</script>';
  include ("./crud-cuentas.php");
  } else {
    echo "Error deleting record: " . $DB_conn->error;
    exit;
  }            
    header("Location: ./crud-cuentas.php");
}
?>


