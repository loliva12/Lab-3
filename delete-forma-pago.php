<!-- Comienza código: delete.php -->
<?PHP

require_once ("./db.php");

if($_GET['id_fp']) {
    $id_fp= $_GET['id_fp'];
    $query = "DELETE FROM FORMAS_DE_PAGO
                WHERE id_fp = $id_fp";

if ($DB_conn->query($query) === TRUE) {
  echo '<script>alert("Borrado exitoso")</script>';
  include ("./crud-forma-pago.php");
  } else {
    echo "Error deleting record: " . $DB_conn->error;
    exit;
  }            
    header("Location: ./crud-forma-pago.php");
}
?>


