<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'legendleague685@gmail.com';
$mail->Password   = 'Amerique123';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;

$mail->setFrom('Gohon95@gmail.com');
$mail->addAddress('legendleague685@gmail.com');     // Add a recipient
$mail->Subject = 'monObjet';
$mail->Body    = 'Céest le corps du mail';
// expliquer que sa s'envoyait en boucle
//$mail->send();
echo 'Le mail a bien été envoyé';
header('location: contact.php');
?>

<?php
$sql = "SELECT * FROM demande;";


$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
    echo "il y a un problème";
} else {
    $demandes = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
header("location: contact.php");
?>


