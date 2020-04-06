
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="../styleimage.css">
    <title>Upload error</title>
</head>
<body>

<header>
        <a name="top"></a>

        <?PHP

        require_once "../header.php";
        ?>
    </header>



    <?php
error_reporting(0);
require_once "../connection.php";


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas valide";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Désolé, le fichier existe déjà";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Désolé, uniquement les types JPG, JPEG, PNG & GIF sont acceptés";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $insert = $conn->query("INSERT into image (IMGname) VALUE ('". basename( $_FILES["fileToUpload"]["name"]). "')");
        header("location: view.php"); 
    } else {
        echo "Désolé, il y a eu une erreur";
    }
}
?>




    <br>
    <br>
    <a class=TryA href="BanqueImage.php">&nbsp;&nbsp;&nbsp;&nbsp;Réessayer</a>

</body>
</html>
