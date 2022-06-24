<?php require_once ("./db.php"); ?>

<?php include ("./header-forma-pago.php"); ?>

<main>
    <div class="container p-4">
        <div class="row">
            <div class="col-4"> 
                <?php include ("./create-forma-pago.php"); ?>
            </div>
            <div class="col-8">
                <?php include ("./read-forma-pago.php"); ?>
            </div>
        </div>
    </div>
    </main>

<?php include ("./footer-forma-pago.php"); ?>
