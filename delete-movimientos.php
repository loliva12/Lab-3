<!-- Comienza código: delete.php -->
<?PHP

require_once ("./db.php");

if($_GET['id_m']) {
    $id_m = $_GET['id_m'];
    $query = "DELETE FROM MOVIMIENTOS
                WHERE id_m = $id_m";

if ($DB_conn->query($query) === TRUE) {
  echo '<script>alert("Borrado exitoso")</script>';
  include ("./crud-movimientos.php");
  } else {
    echo "Error deleting record: " . $DB_conn->error;
    exit;
  }            
    header("Location: ./crud-movimientos.php");
}
?>


