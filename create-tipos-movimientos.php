<!-- Comienza código: create.php -->
<?PHP
//session_start();
$message = $_SESSION['message']; 
$message_type = $_SESSION['message_type']; 
if(isset($message)) { ?>
    <div class="alert alert-<?PHP echo $message_type ?> alert-dismissible fade show" role="alert">
    <p><?PHP echo $message; ?></p>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?PHP 
    session_unset(); 
} ?>

<div class="card card-body">
    <div class="card-header">Crear Tipos de Movimientos</div>
    <form action="./insert-tipos-movimientos.php" method="POST">
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
                <input type="text" name="tm_descripcion" class="form-control" placeholder="Ingrese una descripcion" autofocus required>
            </div>
        </div>
        <input type="submit" class="btn btn-success" name="create" value="Crear">
    </form>
</div>
