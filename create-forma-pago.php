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
    <div class="card-header">Crear Forma de Pago</div>
    <form action="./insert-forma-pago.php" method="POST">
        <div class="form-group">
            <div class="mb-3">
                <label for="fp_nombre">Nombre de tipo de pago</label>
                <input type="text" id="fp_nombre" name="fp_nombre" class="form-control" placeholder="Ingrese el nombre" autofocus required>
            </div>
            <div class="mb-3">
                <label for="fp_descripcion">Descripción</label>
                <input type="text" name="fp_descripcion" class="form-control" placeholder="Ingrese una descripcion" autofocus required>
            </div>
            <div class="mb-3">
                <label for="fp_codigo">Código</label>
                <input type="text" name="fp_codigo" class="form-control" placeholder="Ingrese el codigo" autofocus>
            </div>
        </div>
        <input type="submit" class="btn btn-success" name="create" value="Crear">
    </form>
</div>
