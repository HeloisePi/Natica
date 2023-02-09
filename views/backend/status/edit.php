<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
    if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

$numStat = $_GET['numStat'];
$libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat'];
?>


<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Editer les statuts</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new status-->
            <form action="<?php echo ROOT_URL . '/api/status/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="titre">Nouveau nom du statut</label>
                    <input id="numStat" class="form-control" style="display: none;" type="text" name="numStat" value=" <?php echo ($numStat) ?>">
                    <input id="libStat" class="form-control" type="text" name="libStat" value ="<?php echo($libStat) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

