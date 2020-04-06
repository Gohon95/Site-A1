<?php include 'head.php'; ?>
<header>
    <div class="haut1">
        <img src="img/tintin.png" alt="Mon logo" title="Mon logo">
    </div>
    <div class="haut2">
        <h1 id="watchme">Bienvenue chers aventuriers</h1>
        <ul id="output">
        </ul>


    </div>
    <div class="haut3">
        <div class="burger"><i class="fas fa-align-justify"></i></div>
        <section class="menu">
            <a title="Retourner à l'accueil" href="index.php"><i class="fas fa-home"></i></a><br />
            <a title="Galerie d'images" href="BanqueImage/view.php"><i class="fas fa-images"></i></a><br />
            <a title="Upload d'images" href="BanqueImage/BanqueImage.php"><i class="fas fa-image"></i></a><br />
            <a title="Nouvel article" href="nouvelarticle.php"><i class="far fa-newspaper"></i></a><br />
            <a title="Articles" href="Allarticles"><i class="fas fa-newspaper"></i></a><br />
            <a title="Liste contact" href="Demande.php"><i class="far fa-id-badge"></i></a><br />


        </section>
    </div>
</header>
<?php include 'DemandeUnique.php'; ?>



<main id="demande">
    <div class="all">
        <article>
            <?php foreach ($demandes as $demande) : ?>
                <ul>
                    <li>

                        <h2><a href="DemandeUnique.php?id=<?= $demande['id']; ?>"><?= $demande["objet"]; ?></a></h2>
                        <p><?= $demande["contenu"]; ?></p>

                    </li>
                </ul>
            <?php endforeach; ?>
        </article>

    </div>
</main>



<script>
    $(function() {
        $('.menu').hide("");
        $('.burger').click(function() {
            $('.menu').slideToggle('slow');
        });
    });
</script>