<!-- Comienza código: delete.php -->
<?PHP

require_once ("./db.php");

if($_GET['id_e']) {
    $id_e= $_GET['id_e'];
    $query = "DELETE FROM EMPRESAS
                WHERE id_e = $id_e";

if ($DB_conn->query($query) === TRUE) {
  echo '<script>alert("Borrado exitoso")</script>';
  include ("./crud-empresas.php");
  } else {
    echo "Error deleting record: " . $DB_conn->error;
    exit;
  }            
    header("Location: ./crud-empresas.php");
}
?>


