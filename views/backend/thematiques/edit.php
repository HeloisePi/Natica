<?php



include '../../../header.php';

//Security check
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numThem = $_GET['numThem'];
$libThem = sql_select("THEMATIQUE", "*", "numThem = '$numThem'")[0]['libThem'];


?>


<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Editer les thématiques</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new status-->
            <form action="<?php echo ROOT_URL . '/api/thematique/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="titre">nouveau nom de la thématique</label>
                    <input id="numThem" class="form-control" style="display: none;" type="text" name="numThem" value=" <?php echo ($numThem) ?>">
                    <input id="libThem" class="form-control" type="text" name="libThem" value="<?php echo ($libThem) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</form>