<!-- Comienza código: create.php -->
<?PHP
//session_start();
$message = $_SESSION['message']; 
$message_type = $_SESSION['message_type']; 

$query1 = "SELECT id_e,e_nombre 
             FROM EMPRESAS";
$result1 = mysqli_query($DB_conn, $query1);

$query2 = "SELECT id_fp,fp_nombre 
             FROM FORMAS_DE_PAGO";
$result2 = mysqli_query($DB_conn, $query2);

$query3 = "SELECT id_tm,tm_nombre 
             FROM TIPOS_DE_MOVIMIENTOS";
$result3 = mysqli_query($DB_conn, $query3);

$query4 = "SELECT id_sc,sc_nombre 
             FROM SUB_CUENTAS";
$result4 = mysqli_query($DB_conn, $query4);

if(isset($message)) { ?>
    <div class="alert alert-<?PHP echo $message_type ?> alert-dismissible fade show" role="alert">
    <p><?PHP echo $message; ?></p>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?PHP 
    session_unset(); 
} ?>

<div class="card card-body">
    <div class="card-header">Crear Movimiento</div>
    <form action="./insert-movimientos.php" method="POST">
        <div class="form-group">
            <div class="mb-3">
                <label for="id_e">Nombre de la empresa</label>
                <input type="text" name="id_e" type="list" list="id_e">
                    <datalist id="id_e">
                    <?php
                        while($fila1 = $result1->fetch_assoc()):
                            $id_e = $fila1['id_e'];
                            echo '<option value="'.$fila1[id_e].'">'.$fila1[e_nombre].'</option>';
                        endwhile; 
                    ?>
                    </detalist> 
            </div>
            <div class="mb-3">
                <label for="id_fp">Nombre de la forma de pago</label>
                <input type="text" name="id_fp" type="list" list="id_fp">
                    <datalist id="id_fp">
                    <?php
                        while($fila2 = $result2->fetch_assoc()):
                            $id_fp = $fila2['id_fp'];
                            echo '<option value="'.$fila2[id_fp].'">'.$fila2[fp_nombre].'</option>';
                        endwhile; 
                    ?>
                    </detalist> 
            </div>
            <div class="mb-3">
                <label for="id_tm">Nombre del tipo de movimiento</label>
                <input type="text" name="id_tm" type="list" list="id_tm">
                    <datalist id="id_tm">
                    <?php
                        while($fila3 = $result3->fetch_assoc()):
                            $id_tm = $fila3['id_tm'];
                            echo '<option value="'.$fila3[id_tm].'">'.$fila3[tm_nombre].'</option>';
                        endwhile; 
                    ?>
                    </detalist> 
            </div>
            <div class="mb-3">
                <label for="id_sc">Nombre de sub cuenta</label>
                <input type="text" name="id_sc" type="list" list="id_sc">
                    <datalist id="id_sc">
                    <?php
                        while($fila4 = $result4->fetch_assoc()):
                            $id_sc = $fila4['id_sc'];
                            echo '<option value="'.$fila4[id_sc].'">'.$fila4[sc_nombre].'</option>';
                        endwhile; 
                    ?>
                    </detalist> 
            </div>


            <div class="mb-3">
                <label for="m_nombre">Nombre del movimiento</label>
                <input type="text" id="m_nombre" name="m_nombre" class="form-control" placeholder="Ingrese el nombre" autofocus required>
            </div>
            <div class="mb-3">
                <label for="m_fecha">Fecha</label>
                <input type="date" name="m_fecha" class="form-control" placeholder="Ingrese la fecha" autofocus required>
            </div>
            <div class="mb-3">
                <label for="m_monto">Monto</label>
                <input type="number" name="m_monto" class="form-control" placeholder="Ingrese la monto" autofocus required>
            </div>
        </div>
        <input type="submit" class="btn btn-success" name="create" value="Crear">
    </form>
</div>
