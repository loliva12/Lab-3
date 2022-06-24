<!-- Comienza código: edit.php -->
<?PHP

include("./db.php");

if(isset($_GET['id_sc'])) {
    $id_sc = $_GET['id_sc'];
    $query = "SELECT * FROM SUB_CUENTAS
                WHERE id_sc = $id_sc";
    $result = mysqli_query($DB_conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $register = mysqli_fetch_array($result);
        $sc_nombre = $register['sc_nombre'];
        $sc_codigo = $register['sc_codigo'];
        $id_c = $register['id_c'];
    }
}

?>

<?php include ("./header-subcuentas.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card" card-body>
            <div class="card-header">Editar Sub-Cuentas</div>
                <form action="./update-subcuentas.php" method="POST">
                    <input type="hidden" name="id_sc" value="<?PHP echo $id_sc ?>">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="sc_nombre">Nombre</label>
                            <input type="text"  name="sc_nombre" class="form_control" value="<?PHP echo $sc_nombre ?>" placeholder="Escriba el nombre" autofocus required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="sc_codigo">Código</label>
                            <input type="text" name="sc_codigo" class="form-control" value="<?PHP echo $sc_codigo ?>"  required>
                        </div>
                        <div class="mb-3">
                            <label for="id_c">Cuentas</label>
                            <input type="text" name="id_c" class="form-control" value="<?PHP echo $id_c ?>">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("./footer-subcuentas.php"); ?>