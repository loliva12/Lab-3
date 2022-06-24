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
    <div class="card-header">Crear Empresa</div>
    <form action="./insert-empresas.php" method="POST">
        <div class="form-group">
            <div class="mb-3">
                <label for="e_nombre">Nombre de la empresa</label>
                <input type="text" id="e_nombre" name="e_nombre" class="form-control" placeholder="Ingrese el nombre de la empresa" autofocus required>
            </div>
            <div class="mb-3">
                <label for="e_cuit">Cuit</label>
                <input type="number" name="e_cuit" class="form-control" placeholder="Ingrese el cuit" autofocus required>
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
        <input type="submit" class="btn btn-success" name="create" value="Crear">
    </form>
</div>
