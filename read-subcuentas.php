<!-- Comienza código: read.php -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Código</th>
            <th>Cuentas</th>
        </tr>
    </thead>
    <tbody>
        <?PHP
            $query = "SELECT s.*, c.c_nombre nom_cuenta
            FROM SUB_CUENTAS s, CUENTAS c
            WHERE s.id_c = c.id_c";
            $result = mysqli_query($DB_conn, $query);
           
            while($register = mysqli_fetch_array($result)) { ?>
                <tr onclick="document.location = './edit-subcuentas.php?id_sc=<?PHP echo $register['id_sc']; ?>'">
                    <td><?PHP echo $register['id_sc']; ?></td>
                    <td><?PHP echo $register['sc_nombre']; ?></td>
                    <td><?PHP echo $register['sc_codigo']; ?></td>
                    <td><?PHP echo $register['nom_cuenta']; ?></td>
                    <td>

                        <a href="./edit-subcuentas.php?id_sc=<?PHP echo $register['id_sc']; ?>" class="btn btn-success" title="Editar el registro <?PHP echo $register['id_sc']; ?>">
                            <!-- icono para editar -->
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./delete-subcuentas.php?id_sc=<?PHP echo $register['id_sc']; ?>" class="btn btn-danger" title="Borrar el registro <?PHP echo $register['id_sc']; ?>">
                            <!-- icono para eliminar -->
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?PHP } ?>
    </tbody>
</table>
