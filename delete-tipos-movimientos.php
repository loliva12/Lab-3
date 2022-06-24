<!-- Comienza código: delete.php -->
<?PHP

require_once ("./db.php");

if($_GET['id_tm']) {
    $id_tm= $_GET['id_tm'];
    $query = "DELETE FROM TIPOS_DE_MOVIMIENTOS
                WHERE id_tm = $id_tm";

if ($DB_conn->query($query) === TRUE) {
  echo '<script>alert("Borrado exitoso")</script>';
  include ("./crud-tipos-movimientos.php");
  } else {
    echo "Error deleting record: " . $DB_conn->error;
    exit;
  }            
    header("Location: ./crud-tipos-movimientos.php");
}
?>


