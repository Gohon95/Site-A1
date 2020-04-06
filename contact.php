<?php
//var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "connection.php";

    $sql = "INSERT INTO demande(mail,objet,contenu,publication)
    VALUE('" . $_POST['mail'] . "','"
        . $_POST['objet'] . "','"
        . $_POST['contenu'] . "','"
        . $_POST['publication'] . "')";

    $result = mysqli_query($conn, $sql);
    if ($result === false) {
        echo mysqli_error($conn);
        echo "il y a un problème";
    } else {
        var_dump($sql);
        $id = mysqli_insert_id($conn);
    }
};
?>


<?php
include 'head.php'; ?>
<div class="container">
    <?php

    include 'header.php';

    ?>

    <nav>
        <ul>


            <input type="search" placeholder="Rechercher...">

        </ul>

    </nav>
    <main>
        <div class="contactForm">
            <!-- Début partie formulaire de contact -->
            <form action="envoie.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
                <tr>
                    <td><strong>Envoyer un message <br> </strong></td>
                    <br>
                </tr>
                <tr>
                    <td>
                        <div>Votre nom :</div>
                    </td>
                    <td><input type="text" id="nom" name="nom" size="45" maxlength="100"></td>
                </tr>
                <tr>
                    <td width="17%">
                        <div for="mail">Votre mail :</div>
                    </td>
                    <td><input type="text" id="mail" name="mail" size="45" maxlength="100"></td>
                </tr>
                <tr>
                    <td>
                        <div for="objet">Sujet : </div>
                    </td>
                    <td><input type="text" id="objet" name="objet" size="45" maxlength="120"></td>
                </tr>
                <tr>
                    <td>
                        <div for="contenu">Message : </div>
                    </td>
                    <td><textarea id="contenu" name="contenu" cols="50" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td>

                        <input type="reset" name="Submit" value="Réinitialiser le formulaire">

                    </td>
                    <td>

                        <input type="submit" name="Submit" value="Envoyer">

                    </td>
                </tr>
            </form>

            </table>
        </div>
        <!-- Fin partie formulaire de contact -->
    </main>

    <?php

    include 'footer.php';

    ?>
</div>

</body>

</html>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Axel Gonon</small>
    </div>