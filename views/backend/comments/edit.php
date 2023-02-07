<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numCom = $_GET['numCom'];
$libCom = sql_select("COMMENT","libCom", "numCom = $numCom")[0]['libCom'];

?>


<!--Bootstrap form to edit a comment->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit keyword</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to edit a new status -->
            <form action="<?php echo ROOT_URL . '/api/comments/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="titre">nouveau commentaire</label>
                    <input id="numCom" class="form-control" style="display: none;" type="text" name="numCom" value="<?php echo($numCom)?>">
                    <input id="libCom" class="form-control" type="text" name="libCom" value="<?php echo($libCom) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
</form>