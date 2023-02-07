<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$pseudoMemb = $_GET['pseudoMemb'];
$membre = sql_select("membre", 'pseudoMemb', "pseudoMemb = '$pseudoMemb'");


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
                    <input id="pseudoMemb" class="form-control" style="display: none;" type="text" name="pseudoMemb" value="<?php echo ($pseudoMemb); ?>" readonly="readonly">
                    <input id="membre" class="form-control" type="text" name="menbre" value="<?php echo ($pseudoMemb); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>