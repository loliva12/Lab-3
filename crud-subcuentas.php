<?php require_once ("./db.php"); ?>

<?php include ("./header-subcuentas.php"); ?>

<main>
    <div class="container p-4">
        <div class="row">
            <div class="col-4"> 
                <?php include ("./create-subcuentas.php"); ?>
            </div>
            <div class="col-8">
                <?php include ("./read-subcuentas.php"); ?>
            </div>
        </div>
    </div>
    </main>

<?php include ("./footer-subcuentas.php"); ?>
