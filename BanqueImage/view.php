
<?php
require_once "../connection.php";
$sql = "SELECT * FROM image;";


$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
    echo "il y a un problème";
} else {
    $images = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleimage.css">
    <title>Document</title>
</head>
<body>

    <div class="gallery">

    <?php if ($images == null) : ?>
                    <p>Il n'y a pas d'images</p>
                <?php else : ?>


                    <?php foreach ($images as $image) : ?>
                        <div>
                        <?php $target_dir = "uploads/";
                        $target_file = $target_dir . $image["IMGname"];?>
                                <img src="<?= $target_file ?>" alt=""> 
                            <br><br>
                         

                        </div>
                    <?php endforeach; ?>

                <?php endif ?>
    </div>
    
</body>
</html>

    