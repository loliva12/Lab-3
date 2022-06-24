<!-- Comienza código: edit.php -->
<?PHP

include("./db.php");

if(isset($_GET['id_tm'])) {
    $id_tm = $_GET['id_tm'];
    $query = "SELECT * FROM TIPOS_DE_MOVIMIENTOS
                WHERE id_tm = $id_tm";
    $result = mysqli_query($DB_conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $register = mysqli_fetch_array($result);
        $tm_nombre = $register['tm_nombre'];
        $tm_descripcion = $register['tm_descripcion'];
    }
}

?>

<?php include ("./header-tipos-movimientos.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card" card-body>
            <div class="card-header">Editar Tipos de Movimientos</div>
                <form action="./update-tipos-movimientos.php" method="POST">
                    <input type="hidden" name="id_tm" value="<?PHP echo $id_tm ?>">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="tm_nombre">Nombre de Tipo de Movimiento</label>
                                <select id="tm_nombre" name="tm_nombre">
                                    <optgroup>
                                        <option value="Ingreso">Ingreso</option>
                                        <option value="Egreso">Egreso</option>
                                    </optgroup>
                                </select>    
                        </div>
                    
                        <div class="mb-3">
                            <label for="tm_descripcion">Descripción</label>
                            <input type="text" name="tm_descripcion" class="form-control" value="<?PHP echo $tm_descripcion ?>"  required>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("./footer-tipos-movimientos.php"); ?>