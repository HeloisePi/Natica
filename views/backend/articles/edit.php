<?php



include '../../../header.php';
$numThems = sql_select('thematique', '*');

//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numArt = $_GET['numArt'];
$article = sql_select("article","*", "numArt = $numArt");
print_r($numArt);
//print_r($article);

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit an article</h1>
        </div>
    <div class="col-md-12">

        <form action="<?php echo ROOT_URL . '/api/articles/edit.php' ?>" method="post">

            <div class="form-group">
                <input id="numArt" class="form-control" style="display: none;" type="text" name="numArt" value=" <?php echo ($numArt) ?>">
                <label for="titre">Titre de l’article *</label><br>
                <input type="text" id="titre" name="libTitrArt" class="form-control" value="<?php echo($article[0]['libTitrArt'])?>" required><br>
                <label for="chapo">Chapô de l’article *</label><br>
                <input type="text" id="chapo" name="libChapoArt" class="form-control" value="<?php echo($article[0]['libChapoArt'])?>"  required><br>
                <label for="accroche">Accroche *</label><br>
                <input type="text" id="accroche" name="libAccrochArt" class="form-control" value="<?php echo($article[0]['libAccrochArt'])?>" required><br>
            
                <label for="paragraphe1">Paragraphe 1 * </label><br>
                <input type="text" id="paragraphe1" name ="parag1Art" class="form-control"  value="<?php echo($article[0]['parag1Art'])?>" required><br>
                <label for="sous-titre2">Sous titre 2 *</label><br>
                <input type="text" id="sous-titre2" name="libSsTitr1Art"libSsTitr1Art class="form-control"  value="<?php echo($article[0]['libSsTitr1Art'])?>"required><br>
                <label for="paragraphe2">Paragraphe 2 * </label><br>
                <input type="text" id="paragraphe2" name="parag2Art" class="form-control" value="<?php echo($article[0]['parag2Art'])?>"  required><br>
                <label for="sous-titre3">Sous titre 3 *</label><br>
                <input type="text" id="sous-titre3" name="libSsTitr2Art" class="form-control" value="<?php echo($article[0]['libSsTitr2Art'])?>" required><br>
                <label for="paragraphe3">Paragraphe 3 * </label><br>
                <input type="text" id="paragraphe3" name="parag3Art"  class="form-control" value="<?php echo($article[0]['parag3Art'])?>" required><br>
                <label for="conclusion">Conclusion * </label><br>
                <input type="text" id="conclusion" name="libConclArt"  class="form-control" value="<?php echo($article[0]['libConclArt'])?>" required><br>
                <label for="motcles">Mot Clés *</label><br>
                <select  id="motcles" name="libMotCle"  class="form-control" required>
                    <?php
                    foreach( $numThems as $numThem){
                        ?> <option value="<?php echo $numThem['numThem'] ?>"> <?php echo$numThem['libThem']; ?> </option>
                        <?php
                    }
                    ?>


                </select><br>
                <label for="photo">Importer photo *</label><br>
                <input type="file" id="photo" name="urlPhotArt"><br>
                <label for="adresse">Adresse</label><br>
                <input type="text" id="adresse"  class="form-control" ><br>
                <label for="cout">Coût * (0 si gratuit)</label><br>
                <input type="text" id="cout" class="form-control"   required><br>
                <label for="">Accessibilité de l’expérience (cocher si le lieu est accessible)</label><br>
                <input type="checkbox" id="" name="">
                <input type="checkbox" id="" name="">
                <input type="checkbox" id="" name="">
                <input type="checkbox" id="" name="">
                <input type="checkbox" id="" name="">
                <input type="checkbox" id="" name="">
                <input type="checkbox" id="" name="">
                <input type="checkbox" id="" name="">
                <input type="checkbox" id="" name=""><br>
            </div>
            <div class="form-group mt-2"></div>
            <input class="btn btn-primary" type="submit" name="" id="" value="ENVOYER">


            
        </form>


    </div>
</div>
<?php










?>