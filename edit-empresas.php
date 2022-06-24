<!-- Comienza código: edit.php -->
<?PHP

include("./db.php");

if(isset($_GET['id_e'])) {
    $id_e = $_GET['id_e'];
    $query = "SELECT * FROM EMPRESAS
                WHERE id_e = $id_e";
    $result = mysqli_query($DB_conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $register = mysqli_fetch_array($result);
        $e_nombre = $register['e_nombre'];
        $e_cuit = $register['e_cuit'];
        $e_condicion_iva = $register['e_condicion_iva'];
    }
}

?>

<?php include ("./header-empresas.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card" card-body>
            <div class="card-header">Editar Empresas</div>
                <form action="./update-empresas.php" method="POST">
                    <input type="hidden" name="id_e" value="<?PHP echo $id_e ?>">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="e_nombre">Nombre</label>
                            <input type="text"  name="e_nombre" class="form_control" value="<?PHP echo $e_nombre ?>" placeholder="Escriba el nombre" autofocus required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="e_cuit">Cuit</label>
                            <input type="number" name="e_cuit" class="form-control" value="<?PHP echo $e_cuit ?>"  required>
                        </div>
                        <div class="mb-3">
                <label for="e_condicion_iva">Tipos de condicion IVA</label>
                    <select id="e_condicion_iva" name="e_condicion_iva">
                        <optgroup>
                        <option value="Responsable Inscripto">Responsable Inscripto</option>
                            <option value="Responsable No Inscripto">Responsable No Inscripto</option>
                            <option value="No Responsable">No Responsable</option>
                            <option value="Sujeto Exento">Sujeto Exento</option>
                            <option value="Consumidor Final">Consumidor Final</option>
                            <option value="Responsable Monotributo">Responsable Monotributo</option>
                            <option value="Sejeto No Categorizado">Sejeto No Categorizado</option>
                            <option value="Proveedor del Exterior">Proveedor del Exterior</option>
                            <option value="Cliente del Exterior">Cliente del Exterior</option>
                            <option value="IVA liberado">IVA liberado</option>
                            <option value="Agente de Percepcion">Agente de Percepcion</option>
                            <option value="Pequeño Constribuyente Eventual">Pequeño Constribuyente Eventual</option>
                            <option value="Monotributista Social">Monotributista Social</option>
                            <option value="Pequeño Constribuyente Eventual Social">Pequeño Constribuyente Eventual Social</option>
                        </optgroup>
                    </select>    
            </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("./footer-empresas.php"); ?>