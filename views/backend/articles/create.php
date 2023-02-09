<?php
include '../../../header.php';

$numThems = sql_select('thematique', '*');
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new article</h1>
        </div>
    <div class="col-md-12">
        <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">

            <div class="form-group">
                <label for="titre">Titre de l’article *</label><br>
                <input type="text" id="titre" name="libTitrArt" class="form-control"  required><br>
                <label for="chapo">Chapô de l’article *</label><br>
                <input type="text" id="chapo" name="libChapoArt" class="form-control"  required><br>
                <label for="accroche">Accroche *</label><br>
                <input type="text" id="accroche" name="libAccrochArt" class="form-control" required><br>
            
                <label for="paragraphe1">Paragraphe 1 * </label><br>
                <input type="text" id="paragraphe1" name ="parag1Art" class="form-control" required><br>
                <label for="sous-titre2">Sous titre 2 *</label><br>
                <input type="text" id="sous-titre2" name="libSsTitr1Art"libSsTitr1Art class="form-control" required><br>
                <label for="paragraphe2">Paragraphe 2 * </label><br>
                <input type="text" id="paragraphe2" name="parag2Art" class="form-control"  required><br>
                <label for="sous-titre3">Sous titre 3 *</label><br>
                <input type="text" id="sous-titre3" name="libSsTitr2Art" class="form-control" required><br>
                <label for="paragraphe3">Paragraphe 3 * </label><br>
                <input type="text" id="paragraphe3" name="parag3Art"  class="form-control" required><br>
                <label for="conclusion">Conclusion * </label><br>
                <input type="text" id="conclusion" name="libConclArt"  class="form-control" required><br>
                <label for="numThem">Mot Clés *</label><br>
                    <?php
                    foreach( $numThems as $numThem){
                        ?> <input type="checkbox"  value="<?php echo $numThem['numThem'] ?>" id="numThem" name="numThem"  > <?php echo$numThem['libThem']; ?> </input><br>
                        <?php
                    }
                    ?>


                

                <br>
                <label for="photo">Importer photo *</label><br>
                <input type="file" id="photo" name="urlPhotArt"><br>
                <label for="adresse">Adresse</label><br>
                <input type="text" id="adresse"  class="form-control" ><br>
                <label for="cout">Coût * (0 si gratuit)</label><br>
                <input type="text" id="cout" class="form-control"  required><br>
                <label for="">Accessibilité de l’expérience (cocher si le lieu est accessible) </label><br>

                <label for="defMent"><img src="/assert/svg/Deficients-mentaux-RVB.svg" alt="Deficients mentaux"></label>
                <input type="checkbox" id="defMent" name="defMent">
                
                <label for="defMotA"> <img src="/assert/svg/Deficients-moteur-avec-accompagnateur-RVB.svg" alt="Déficient moteur avec accompagnateur"></label>
                <input type="checkbox" id="defMotA" name="defMotA">

                <label for="defMot"> <img src="/assert/svg//Deficients-moteur-RVB.svg" alt="Déficient moteur"></label>
                <input type="checkbox" id="defMot" name="defMot">

                <label for="defVis"> <img src="/assert/svg/Deficients-visuels-RVB.svg" alt="Deficient visuel"> </label>
                <input type="checkbox" id="defVis" name="defVis">

                <label for="persMobiRedu"> <img src="/assert/svg/Personnes-a-mobilite-reduite-RVB.svg" alt=" Personnes à mobilité reduite"></label>
                <input type="checkbox" id="persMobiRedu" name="persMobiRedu">

                <label for="pousette"> <img src="/assert/svg/Poussette-RVB.svg" alt="Pousette"></label>
                <input type="checkbox" id="pousette" name="pousette"><br>

            </div>
            <div class="form-group mt-2"></div>
            <input class="btn btn-primary" type="submit" name="" id="" value="ENVOYER">
                </div>

            
        </form>


    </div>
</div>