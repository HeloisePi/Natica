<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$articles = sql_select("article", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Articles</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>numero Article</th>
                        <th>date de création</th>
                        <th>Titre </th>
                        <th>chapo</th>
                        <th>Accroche</th>
                        <th>paragraphe1</th>
                        <th>sous titre 1</th>
                        <th>paragraphe2 </th>
                        <th>sous titre 2</th>
                        <th>paragraphe3</th>
                        <th>conclusion  </th>
                        <th>image</th>
                        <th>mot clés</th>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <td><?php echo $article['numArt']; ?></td>
                            <td><?php echo $article['dtCreArt']; ?></td>
                            <td><?php echo $article['libTitrArt']; ?></td>
                            <td><?php echo $article['libChapoArt']; ?></td>
                            <td><?php echo $article['libAccrochArt']; ?></td>
                            <td><?php echo $article['parag1Art']; ?></td>
                            <td><?php echo $article['libSsTitr1Art']; ?></td>
                            <td><?php echo $article['parag2Art']; ?></td>
                            <td><?php echo $article['libSsTitr2Art']; ?></td>
                            <td><?php echo $article['parag3Art']; ?></td>
                            <td><?php echo $article['libConclArt']; ?></td>
                            <td><?php echo $article['urlPhotArt']; ?></td>
                            <td><?php echo $article['numThem']; ?></td>
                            
                            <td>
                                <a href="edit.php?id=<?php echo $article['numArt']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-danger">Delete</a>
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