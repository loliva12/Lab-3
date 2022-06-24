<!-- Comienza código: read.php -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Empresa</th>
            <th>Forma de pago</th>
            <th>Tipo de movimiento</th>
            <th>Sub cuenta</th>
        </tr>
    </thead>
    <tbody>
        <?PHP
            $query = "SELECT m.id_m, m.m_nombre, m.m_fecha, m.m_monto, e.e_nombre, f.fp_nombre, t.tm_nombre, s.sc_nombre
            FROM MOVIMIENTOS m, EMPRESAS e, FORMAS_DE_PAGO f, TIPOS_DE_MOVIMIENTOS t, SUB_CUENTAS s
            WHERE m.id_e = e.id_e AND m.id_fp = f.id_fp AND m.id_tm = t.id_tm AND m.id_sc = s.id_sc";
            $result = mysqli_query($DB_conn, $query);
           
            while($register = mysqli_fetch_array($result)) { ?>
                <tr onclick="document.location = './edit-movimientos.php?id_m=<?PHP echo $register['id_m']; ?>'">
                    <td><?PHP echo $register['id_m']; ?></td>
                    <td><?PHP echo $register['m_nombre']; ?></td>
                    <td><?PHP echo $register['m_fecha']; ?></td>
                    <td><?PHP echo $register['m_monto']; ?></td>
                    <td><?PHP echo $register['e_nombre']; ?></td>
                    <td><?PHP echo $register['fp_nombre']; ?></td>
                    <td><?PHP echo $register['tm_nombre']; ?></td>
                    <td><?PHP echo $register['sc_nombre']; ?></td>
                    <td>

                        <a href="./edit-movimientos.php?id_m=<?PHP echo $register['id_m']; ?>" class="btn btn-success" title="Editar el registro <?PHP echo $register['id_m']; ?>">
                            <!-- icono para editar -->
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./delete-movimientos.php?id_m=<?PHP echo $register['id_m']; ?>" class="btn btn-danger" title="Borrar el registro <?PHP echo $register['id_m']; ?>">
                            <!-- icono para eliminar -->
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?PHP } ?>
    </tbody>
</table>
