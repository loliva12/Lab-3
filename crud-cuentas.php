<?php require_once ("./db.php"); ?>

<?php include ("./header-cuentas.php"); ?>

<main>
    <div class="container p-4">
        <div class="row">
            <div class="col-4"> 
                <?php include ("./create-cuentas.php"); ?>
            </div>
            <div class="col-8">
                <?php include ("./read-cuentas.php"); ?>
            </div>
        </div>
    </div>
    </main>

<?php include ("./footer-cuentas.php"); ?>
