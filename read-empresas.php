<!-- Comienza código: read.php -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cuit</th>
            <th>Condicion IVA</th>
        </tr>
    </thead>
    <tbody>
        <?PHP
            $query = "SELECT * FROM EMPRESAS";
            $result = mysqli_query($DB_conn, $query);

            while($register = mysqli_fetch_array($result)) { ?>
                <tr onclick="document.location = './edit-empresas.php?id_fp=<?PHP echo $register['id_e']; ?>'">
                    <td><?PHP echo $register['id_e']; ?></td>
                    <td><?PHP echo $register['e_nombre']; ?></td>
                    <td><?PHP echo $register['e_cuit']; ?></td>
                    <td><?PHP echo $register['e_condicion_iva']; ?></td>
                    <td>

                        <a href="./edit-empresas.php?id_e=<?PHP echo $register['id_e']; ?>" class="btn btn-success" title="Editar el registro <?PHP echo $register['id_e']; ?>">
                            <!-- icono para editar -->
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./delete-empresas.php?id_e=<?PHP echo $register['id_e']; ?>" class="btn btn-danger" title="Borrar el registro <?PHP echo $register['id_e']; ?>">
                            <!-- icono para eliminar -->
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?PHP } ?>
    </tbody>
</table>
