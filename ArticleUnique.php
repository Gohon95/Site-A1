<?php require_once "connection.php"; ?>


<?php
$sql = "SELECT * FROM article
WHERE id=" . $_GET['id'];


$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
    echo "il y a un problème";
} else {
    $articles = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Ma première page en HTML/CSS">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../www/style.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <title>Le Jeu</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<body>


    <main>
        <div class="all">
            <article>
                <?php if ($articles === null) : ?>
                    <p>Il n'y a pas d'article</p>
                <?php else : ?>

                    <ul>
                        <li>

                            <h2><?php echo $articles["titre"]; ?></h2>
                            <p><?php echo $articles["contenu"]; ?></p>

                        </li>
                    </ul>
                <?php endif ?>
            </article>


        </div>
    </main>



</body