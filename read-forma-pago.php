<!-- Comienza código: read.php -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID </th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Código</th>
        </tr>
    </thead>
    <tbody>
        <?PHP
            $query = "SELECT * FROM FORMAS_DE_PAGO";
            $result = mysqli_query($DB_conn, $query);

            while($register = mysqli_fetch_array($result)) { ?>
                <tr onclick="document.location = './edit-forma-pago.php?id_fp=<?PHP echo $register['id_fp']; ?>'">
                    <td><?PHP echo $register['id_fp']; ?></td>
                    <td><?PHP echo $register['fp_nombre']; ?></td>
                    <td><?PHP echo $register['fp_descripcion']; ?></td>
                    <td><?PHP echo $register['fp_codigo']; ?></td>
                    <td>

                        <a href="./edit-forma-pago.php?id_fp=<?PHP echo $register['id_fp']; ?>" class="btn btn-success" title="Editar el registro <?PHP echo $register['id_fp']; ?>">
                            <!-- icono para editar -->
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./delete-forma-pago.php?id_fp=<?PHP echo $register['id_fp']; ?>" class="btn btn-danger" title="Borrar el registro <?PHP echo $register['id_fp']; ?>">
                            <!-- icono para eliminar -->
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?PHP } ?>
    </tbody>
</table>
