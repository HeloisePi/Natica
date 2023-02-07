<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$likes = sql_select("likeart", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Likes</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numéro Membre</th>
                        <th>Numéro Article</th>
                        <th>Like Article</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($likes as $like) { ?>
                        <tr>
                            <td><?php echo $like['numMemb']; ?></td>
                            <td><?php echo $like['numArt']; ?></td>
                            <td><?php echo $like['likeA']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $like['numMemb']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo $like['numMemb']; ?>" class="btn btn-danger">Delete</a>
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