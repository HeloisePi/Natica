<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all comments
$commentaires = sql_select("COMMENT", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaires</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>numéro Commentaire</th>
                        <th>Commentaire</th>
                        <th>Modo commentaire</th>
                        <th> numéro Article</th>
                        <th> numéro Membre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($commentaires as $commentaire) { ?>
                        <tr>
                            <td><?php echo $commentaire['numCom']; ?></td>
                            <td><?php echo $commentaire['libCom']; ?></td>
                            <td><?php echo $commentaire['notifComKOAff']; ?></td>
                            <td><?php echo $commentaire['numArt']; ?></td>
                            <td><?php echo $commentaire['numMemb']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $commentaire['numCom']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numCom=<?php echo $commentaire['numCom']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer