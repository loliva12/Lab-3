<!-- Comienza código: read.php -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <?PHP
            $query = "SELECT * FROM TIPOS_DE_MOVIMIENTOS";
            $result = mysqli_query($DB_conn, $query);

            while($register = mysqli_fetch_array($result)) { ?>
                <tr onclick="document.location = './edit-tipos-movimientos.php?id_tm=<?PHP echo $register['id_tm']; ?>'">
                    <td><?PHP echo $register['id_tm']; ?></td>
                    <td><?PHP echo $register['tm_nombre']; ?></td>
                    <td><?PHP echo $register['tm_descripcion']; ?></td>
                    <td>

                        <a href="./edit-tipos-movimientos.php?id_tm=<?PHP echo $register['id_tm']; ?>" class="btn btn-success" title="Editar el registro <?PHP echo $register['id_tm']; ?>">
                            <!-- icono para editar -->
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./delete-tipos-movimientos.php?id_tm=<?PHP echo $register['id_tm']; ?>" class="btn btn-danger" title="Borrar el registro <?PHP echo $register['id_tm']; ?>">
                            <!-- icono para eliminar -->
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?PHP } ?>
    </tbody>
</table>
