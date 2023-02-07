<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numArt = $_GET['numArt'];

$libStat = sql_select("article", "'numArt', 'dtCreArt', `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`", "numArt = $numArt")[0]['numArt'];


?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/status/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">libStat</label>
                    
                    <input id="libStat" class="form-control" type="text" name="libStat" value="<?php echo($numArt); ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm Deletion ?</button>
                </div>
            </form>
        </div>
    </div>
</div>