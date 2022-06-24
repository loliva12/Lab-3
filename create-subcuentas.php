<!-- Comienza código: create.php -->
<?PHP
//session_start();
$message = $_SESSION['message']; 
$message_type = $_SESSION['message_type']; 

$query1 = "SELECT id_c,c_nombre 
             FROM CUENTAS";
$result1 = mysqli_query($DB_conn, $query1);

if(isset($message)) { ?>
    <div class="alert alert-<?PHP echo $message_type ?> alert-dismissible fade show" role="alert">
    <p><?PHP echo $message; ?></p>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?PHP 
    session_unset(); 
} ?>

<div class="card card-body">
    <div class="card-header">Crear Sub-Cuentas</div>
    <form action="./insert-subcuentas.php" method="POST">
        <div class="form-group">
        <div class="mb-3">
            <label for="id_c">Nombre de cuenta</label>
            <input type="text" name="id_c" type="list" list="id_c">
                <datalist id="id_c">
                <?php
                    while($fila1 = $result1->fetch_assoc()):
                        $id_c = $fila1['id_c'];
                        echo '<option value="'.$fila1[id_c].'">'.$fila1[c_nombre].'</option>';
                    endwhile; 
                ?>
            </detalist> 
            </div>
            <div class="mb-3">
                <label for="sc_nombre">Nombre de la sub-cuenta</label>
                <input type="text" id="sc_nombre" name="sc_nombre" class="form-control" placeholder="Ingrese el nombre" autofocus required>
            </div>
            <div class="mb-3">
                <label for="sc_codigo">Código</label>
                <input type="text" name="sc_codigo" class="form-control" placeholder="Ingrese el codigo" autofocus required>
            </div>
        </div>
        <input type="submit" class="btn btn-success" name="create" value="Crear">
    </form>
</div>
