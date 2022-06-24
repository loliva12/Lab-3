<?php require_once ("./db.php"); ?>

<?php include ("./header-tipos-movimientos.php"); ?>

<main>
    <div class="container p-4">
        <div class="row">
            <div class="col-4"> 
                <?php include ("./create-tipos-movimientos.php"); ?>
            </div>
            <div class="col-8">
                <?php include ("./read-tipos-movimientos.php"); ?>
            </div>
        </div>
    </div>
    </main>

<?php include ("./footer-tipos-movimientos.php"); ?>
