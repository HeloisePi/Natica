<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numCom = $_GET['numCom'];
$libCom = sql_select("COMMENT", "libCom", "numCom = $numCom")[0]['libCom'];


?>

<!--Bootstrap form to delete a comment-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer le commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a comment-->
            <form action="<?php echo ROOT_URL . '/api/comments/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Commentaire</label>
                    <input id="numCom" class="form-control" style="display: none;" type="text" name="numCom" value="<?php echo($numCom); ?>" readonly="readonly">
                    <input id="numCom" class="form-control" type="text" name="libCom" value="<?php echo($libCom); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm Deletion ?</button>
                </div>
            </form>
        </div>
    </div>
</div>