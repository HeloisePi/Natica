<?php
include '../../../header.php';

?>

<form action="<?php echo ROOT_URL . '/api/keywords/create.php' ?>" method="post">
    <label for="titre">nom du mot clé *</label><br>
    <input type="text" id="titre" name="libMotCle" required><br>
    <input type="submit" name="" id="" value="ENVOYER">
    
</form>