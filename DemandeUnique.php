<?php require_once "connectioncontact.php"; ?>


<?php
$sql = "SELECT * FROM demande
WHERE id=" . $_GET['id'];


$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
    echo "il y a un problème";
} else {
    $demandes = mysqli_fetch_assoc($result);
}

?>
<?php include 'head.php'; ?>


<main>
    <div class="all">
        <article>
            <?php if ($demandes === null) : ?>
                <p>Il n'y a pas d'article</p>
            <?php else : ?>

                <ul>
                    <li>

                        <h2><?php echo $demandes["objet"]; ?></h2>
                        <p><?php echo $demandes["contenu"]; ?></p>

                    </li>
                </ul>
            <?php endif ?>
        </article>


    </div>
</main>