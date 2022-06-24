<!-- Comienza código: edit.php -->
<?PHP

include("./db.php");

if(isset($_GET['id_c'])) {
    $id_c = $_GET['id_c'];
    $query = "SELECT * FROM CUENTAS
                WHERE id_c = $id_c";
    $result = mysqli_query($DB_conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $register = mysqli_fetch_array($result);
        $c_nombre = $register['c_nombre'];
        $c_codigo = $register['c_codigo'];
    }
}

?>

<?php include ("./header-cuentas.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card" card-body>
            <div class="card-header">Editar Cuentas</div>
                <form action="./update-cuentas.php" method="POST">
                    <input type="hidden" name="id_c" value="<?PHP echo $id_c ?>">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="c_nombre">Nombre</label>
                            <input type="text"  name="c_nombre" class="form_control" value="<?PHP echo $c_nombre ?>" placeholder="Escriba el nombre" autofocus required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="c_codigo">Código</label>
                            <input type="text" name="c_codigo" class="form-control" value="<?PHP echo $c_codigo ?>"  required>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("./footer-cuentas.php"); ?>