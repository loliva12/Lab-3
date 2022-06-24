<!-- Comienza código: edit.php -->
<?PHP

include("./db.php");

if(isset($_GET['id_fp'])) {
    $id_fp = $_GET['id_fp'];
    $query = "SELECT * FROM FORMAS_DE_PAGO
                WHERE id_fp = $id_fp";
    $result = mysqli_query($DB_conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $register = mysqli_fetch_array($result);
        $fp_nombre = $register['fp_nombre'];
        $fp_descripcion = $register['fp_descripcion'];
        $fp_codigo = $register['fp_codigo'];
    }
}

?>

<?php include ("./header-forma-pago.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card" card-body>
            <div class="card-header">Editar Forma de Pago</div>
                <form action="./update-forma-pago.php" method="POST">
                    <input type="hidden" name="id_fp" value="<?PHP echo $id_fp ?>">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="fp_nombre">Nombre</label>
                            <input type="text"  name="fp_nombre" class="form_control" value="<?PHP echo $fp_nombre ?>" placeholder="Escriba el nombre" autofocus required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="fp_descripcion">Descripción</label>
                            <input type="text" name="fp_descripcion" class="form-control" value="<?PHP echo $fp_descripcion ?>"  required>
                        </div>
                        <div class="mb-3">
                            <label for="fp_codigo">Código</label>
                            <input type="fp_codigo" name="fp_codigo" class="form-control" value="<?PHP echo $fp_codigo ?>">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("./footer-forma-pago.php"); ?>