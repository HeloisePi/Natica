<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numArt = $_GET['numArt'];
$article = sql_select("article", "*", "numArt = $numArt")[0];


?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="article">article</label>
                    
                    <input id="article" class="form-control" type="text" name="numArt" value="<?php echo($numArt); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="dtCreaArt" value="<?php echo($article['dtCreArt']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libTitrArt" value="<?php echo($article['libTitrArt']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libChapoArt" value="<?php echo($article['libChapoArt']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libAccrochArt" value="<?php echo($article['libAccrochArt']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="parag1Art" value="<?php echo($article['parag1Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libSsTitr1Art" value="<?php echo($article['libSsTitr1Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="parag2Art" value="<?php echo($article['parag2Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libSsTitr2Art" value="<?php echo($article['libSsTitr2Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="parag3Art" value="<?php echo($article['parag3Art']); ?>" readonly="readonly"><br>
                    <input id="article" class="form-control" type="text" name="libConclArt" value="<?php echo($article['libConclArt']); ?>" readonly="readonly"><br>

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm Deletion ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

