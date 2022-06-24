<!-- Comienza código: delete.php -->
<?PHP

require_once ("./db.php");

if($_GET['id_sc']) {
    $id_sc = $_GET['id_sc'];
    $query = "DELETE FROM SUB_CUENTAS
                WHERE id_sc = $id_sc";

if ($DB_conn->query($query) === TRUE) {
  echo '<script>alert("Borrado exitoso")</script>';
  include ("./crud-subcuentas.php");
  } else {
    echo "Error deleting record: " . $DB_conn->error;
    exit;
  }            
    header("Location: ./crud-subcuentas.php");
}
?>


