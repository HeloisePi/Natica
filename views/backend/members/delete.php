<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numMemb = $_GET['numMemb'];
$membre = sql_select("membre", '*', "numMemb = '$numMemb'")[0];


?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Membre</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/membre/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat"></label>
                    <input id="numMemb" class="form-control" style="display: none;" type="text" name="numMemb" value="<?php echo ($numMemb); ?>" readonly="readonly">
                    <input id="membre" class="form-control" type="text" name="menbre" value="<?php echo ($numMemb); ?>" readonly="readonly"><br>
                    <input id="membre" class="form-control" type="text" name="menbre" value="<?php echo ($membre['prenomMemb']); ?>" readonly="readonly"><br>
                    <input id="membre" class="form-control" type="text" name="menbre" value="<?php echo ($membre['nomMemb']); ?>" readonly="readonly"><br>
                    <input id="membre" class="form-control" type="text" name="menbre" value="<?php echo ($membre['eMailMemb']); ?>" readonly="readonly"><br>
                    <input id="membre" class="form-control" type="text" name="menbre" value="<?php echo ($membre['dtCreaMemb']); ?>" readonly="readonly"><br>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>