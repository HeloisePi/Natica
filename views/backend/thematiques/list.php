<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all thematique
$thematiques = sql_select("thematique", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thématiques</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>numéro de thématique</th>
                        <th>mot clé de la thématique</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($thematiques as $thematiques) { ?>
                        <tr>
                            <td><?php echo $thematiques['numThem']; ?></td>
                            <td><?php echo $thematiques['libThem']; ?></td>
                            <td>
                                <a href="edit.php?numThem=<?php echo $thematiques['numThem']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numThem=<?php echo $thematiques['numThem']; ?>" class="btn btn-danger">Delete</a>
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