<?php



include '../../../header.php';

//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
}


$numMemb  = $_GET['numMemb'];
$membre = sql_select("membre", '*' , "numMemb = '$numMemb'")[0];
//var_dump ($membre);
?>


<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Editer le Membre</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a new status-->
            <form action="<?php echo ROOT_URL . '/api/membre/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Nouveau Prénom du membre</label><br>
                    <input id="numMemb" class="form-control" style="display: none;" type="text" name="numMemb" value=" <?php echo ($numMemb) ?>">
                    
                    <input id="prenomMemb" class="form-control"  type="text" name="prenomMemb" value="<?php echo trim(($membre['prenomMemb'])); ?>"> <br>


                    <label for="nomMemb">Nouveau nom du membre</label><br>
                    <input id="nomMemb"  class="form-control" type="text" name="nomMemb" value="<?php echo trim(($membre['nomMemb'])); ?> ">
                    
                    <label for="pseudoMemb">Nouveau pseudo du membre</label><br>
                    <input id="pseudoMemb"  class="form-control" type="text" name="pseudoMemb" value="<?php echo trim(($membre['pseudoMemb'])); ?> ">
                    
                    
                    <label for="passMemb">Nouveau mot de passe du membre</label><br>
                    <input id="passMemb"  class="form-control" type="text" name="passMemb" value="<?php echo trim(($membre['passMemb']));?>">

                    
                    <label for="eMailMemb">Nouvel e-mail du membre</label><br>
                    <input id="eMailMemb"  class="form-control" type="text" name="eMailMemb" value="<?php echo trim(($membre['eMailMemb'])); ?> ">

                    <label for="numStat">Statut du membre</label><br>
                    <input id="numStat"  class="form-control" type="text" name="numStat" pattern="[1-3]" value="<?php echo trim(($membre['numStat'])); ?> ">

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</form>