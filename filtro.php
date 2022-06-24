<?PHP

require_once ("./db.php");
$fp_codigo = $_GET["fp_codigo"];
$sql = "SELECT F.fp_nombre, F.fp_codigo, T.tm_nombre, M.m_monto
          FROM FORMAS_DE_PAGO F,
               TIPOS_DE_MOVIMIENTOS T,
               MOVIMIENTOS M    
        WHERE M.id_fp = F.id_fp 
          and M.id_tm = T.id_tm
          and F.fp_codigo = '$fp_codigo'";

$result = mysqli_query($DB_conn, $sql);

if ($result->num_rows > 0) {
    $ligne = $result;
  } else {
    echo "0 results";
    echo $fp_codigo;
  }
  $DB_conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Trabajo Practico 1" />
        <meta name="author" content="Lucia Oliva y Sabrina Vicente" />
        <title>Resumen</title>
        <link rel="stylesheet" href="./Inicio.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="./styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </meta>
</head>

    <body class="sb-nav-fixed">
    <div id="container-header">
        <header>
            <div id="conteiner-header-title">
                <h1>Sistema Contable Estadistico</h1>
            </div> 
        </header>
    </div>        
              <!--<div id="layoutSidenav">
            <div id="layoutSidenav_content">-->
                <!--<main>-->
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">RESUMEN DE FORMA DE PAGO</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Resumen
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped" style="width:100%"> 
                                    <thead>
                                        <tr>
                                            <th>CODIGO</th>
                                            <th>fORMA DE PAGO</th>
                                            <th>TIPO DE MOVIMIENTO</th>
                                            <th>MONTO MOVIMIENTO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php 
                                                        foreach ($ligne as $list) {
                                                ?>
                                                <tr>
                                                    <td><?php echo stripslashes($list['fp_codigo']); ?></td>
                                                    <td><?php echo stripslashes($list['fp_nombre']) ; ?></td>
                                                    <td><?php echo stripslashes($list['tm_nombre']); ?></td>
                                                    <td><?php echo stripslashes($list['m_monto']); ?></td>
                                                </tr>
                                                <?php
                                            
                                            }
                                        ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!--</main>-->
                    <div class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">

                                <form action="./tabla.php" method="POST">
                                    <input type="submit" class="btn btn-primary" name="create" value="VOLVER">
                                </form>
                                
                            </div>
                        </div>
                    </div>
            <!--</div>-->
        <!--</div>-->
        <?php include('./footer-movimientos.php'); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
