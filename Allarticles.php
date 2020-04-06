<?php require_once "connection.php"; ?>

<?php
$sql = "SELECT * FROM article;";


$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
    echo "il y a un problème";
} else {
    $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Ma première page en HTML/CSS">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../www/style.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <title>Tous les articles</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>



    <main>
        
            <article>
                <?php foreach ($articles as $article) : ?>
                    <ul>
                        <li>
                            <h2><a href="ArticleUnique.php?id=<?= $article['id']; ?>"><?= $article["titre"]; ?></h2></a>
                            <p><?= $article["contenu"]; ?></p>

                        </li>
                    </ul>
                <?php endforeach; ?>
            </article>

        </div>
    </main>



</body>