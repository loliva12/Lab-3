<!-- Comienza código: edit.php -->
<?PHP

include("./db.php");

if(isset($_GET['id_m'])) {
    $id_m = $_GET['id_m'];
    $query = "SELECT m_nombre, m_fecha, m_monto, id_e, id_fp, id_tm, id_sc
                FROM MOVIMIENTOS
                WHERE id_m = $id_m";
    $result = mysqli_query($DB_conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $register = mysqli_fetch_array($result);
        $m_nombre = $register['m_nombre'];
        $m_fecha = $register['m_fecha'];
        $m_monto = $register['m_monto'];
        $id_e = $register['id_e'];
        $id_fp = $register['id_fp'];
        $id_tm = $register['id_tm'];
        $id_sc = $register['id_sc'];
    }
}

?>

<?php include ("./header-movimientos.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card" card-body>
            <div class="card-header">Editar Movimiento</div>
                <form action="./update-movimientos.php" method="POST">
                    <input type="hidden" name="id_m" value="<?PHP echo $id_m ?>">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="m_nombre">Nombre</label>
                            <input type="text"  name="m_nombre" class="form_control" value="<?PHP echo $m_nombre ?>" placeholder="Escriba el nombre" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="m_fecha">Fecha</label>
                            <input type="date" name="m_fecha" class="form-control" value="<?PHP echo $m_fecha ?>"  required>
                        </div>
                        <div class="mb-3">
                            <label for="m_monto">Monto</label>
                            <input type="number" name="m_monto" class="form-control" value="<?PHP echo $m_monto ?>"  required>
                        </div>
                        <div class="mb-3">
                            <label for="id_e">Nombre de la empresa</label>
                            <input type="text" name="id_e" type="list" list="id_e">
                            <datalist id="id_e">
                                <?php
                                while($fila = $result->fetch_assoc()):
                                    $id_e = $fila['id_e'];
                                    echo '<option value="'.$fila[id_e].'">'.$fila[e_nombre].'</option>';
                                endwhile; 
                                ?>
                            </detalist> 
                        </div>
                        <div class="mb-3">
                            <label for="id_fp">Nombre de la forma de pago</label>
                            <input type="text" name="id_fp" type="list" list="id_fp">
                            <datalist id="id_fp">
                                <?php
                                while($fila = $result->fetch_assoc()):
                                    $id_fp = $fila['id_fp'];
                                    echo '<option value="'.$fila[id_fp].'">'.$fila[fp_nombre].'</option>';
                                endwhile; 
                                ?>
                            </detalist> 
                        </div>
                        <div class="mb-3">
                            <label for="id_tm">Nombre del tipo de movimiento</label>
                            <input type="text" name="id_tm" type="list" list="id_tm">
                            <datalist id="id_tm">
                                <?php
                                while($fila = $result->fetch_assoc()):
                                    $id_tm = $fila['id_tm'];
                                    echo '<option value="'.$fila[id_tm].'">'.$fila[tm_nombre].'</option>';
                                endwhile; 
                                ?>
                            </detalist> 
                        </div>
                        <div class="mb-3">
                            <label for="id_sc">Nombre de sub cuenta</label>
                            <input type="text" name="id_sc" type="list" list="id_sc">
                            <datalist id="id_sc">
                                <?php
                                while($fila = $result->fetch_assoc()):
                                    $id_sc = $fila['id_sc'];
                                    echo '<option value="'.$fila[id_sc].'">'.$fila[sc_nombre].'</option>';
                                endwhile; 
                                ?>
                            </detalist> 
                         </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("./footer-movimientos.php"); ?>