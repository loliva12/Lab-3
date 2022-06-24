<!-- Comienza código: read.php -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Código</th>
        </tr>
    </thead>
    <tbody>
        <?PHP
            $query = "SELECT * FROM CUENTAS";
            $result = mysqli_query($DB_conn, $query);

            while($register = mysqli_fetch_array($result)) { ?>
                <tr onclick="document.location = './edit-cuentas.php?id_c=<?PHP echo $register['id_c']; ?>'">
                    <td><?PHP echo $register['id_c']; ?></td>
                    <td><?PHP echo $register['c_nombre']; ?></td>
                    <td><?PHP echo $register['c_codigo']; ?></td>
                    <td>

                        <a href="./edit-cuentas.php?id_c=<?PHP echo $register['id_c']; ?>" class="btn btn-success" title="Editar el registro <?PHP echo $register['id_c']; ?>">
                            <!-- icono para editar -->
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./delete-cuentas.php?id_c=<?PHP echo $register['id_c']; ?>" class="btn btn-danger" title="Borrar el registro <?PHP echo $register['id_c']; ?>">
                            <!-- icono para eliminar -->
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?PHP } ?>
    </tbody>
</table>
