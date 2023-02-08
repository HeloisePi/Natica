<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numMotCle = $_GET['numMotCle'];
$libMotCle = sql_select("MOTCLE","libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];

?>


<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit keyword</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new status-->
            <form action="<?php echo ROOT_URL . '/api/keywords/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="titre">nouveau nom du mot clé</label>
                    <input id="numMotCle" class="form-control" style="display: none;" type="text" name="numMotCle" value="<?php echo($numMotCle)?>">
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle" value="<?php echo($libMotCle) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
</form>