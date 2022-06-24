<?php require_once ("./db.php"); ?>

<?php include ("./header-empresas.php"); ?>

<main>
    <div class="container p-4">
        <div class="row">
            <div class="col-4"> 
                <?php include ("./create-empresas.php"); ?>
            </div>
            <div class="col-8">
                <?php include ("./read-empresas.php"); ?>
            </div>
        </div>
    </div>
    </main>

<?php include ("./footer-empresas.php"); ?>
