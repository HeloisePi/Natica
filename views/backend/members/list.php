<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$members = sql_select("membre", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Members</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>numMembre</th>
                        <th>prenom</th>
                        <th>nom</th>
                        <th>pseudo</th>
                        <th>e-mail</th>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $member) { ?>
                        <tr>
                            <td><?php echo $member['numMemb']; ?></td>
                            <td><?php echo $member['prenomMemb']; ?></td>
                            <td><?php echo $member['nomMemb']; ?></td>
                            <td><?php echo $member['pseudoMemb']; ?></td>
                            <td><?php echo $member['eMailMemb']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $member['numStat']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo $member['numStat']; ?>" class="btn btn-danger">Delete</a>
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