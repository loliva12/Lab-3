<?php require_once ("./db.php"); ?>

<?php include ("./header-movimientos.php"); ?>

<main>
    <div class="container p-4">
        <div class="row">
            <div class="col-4"> 
                <?php include ("./create-movimientos.php"); ?>
            </div>
            <div class="col-8">
                <?php include ("./read-movimientos.php"); ?>
            </div>
        </div>
    </div>
    </main>

<?php include ("./footer-movimientos.php"); ?>
