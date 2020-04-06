<header>
	<div class="haut1">
		<img src="img/tintin.png" alt="Mon logo" title="Mon logo">
	</div>
	<div class="haut2">
		<link rel="stylesheet" href="css/style.css">

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

			<?php

			if (isset($_SESSION["user"]) && $_SESSION["user"] != null) {
				echo "<a title='backoffice' href='backoffice.php'><i class='fa fa-id-card'></i></a><br/>";
				echo "<a title='Déconnexion' href='logout.php'><i class='fa fa-user-times'></i></a><br/>";
			} else {
				echo "<a title='Connexion' ><i class='fa fa-user-plus trigger'></i></a><br/>";
			}

			?>




			<div class="modal">
				<div class="modal-content">
					<a class="close-button-mod">&times;</a>


					<div class="seLog">
						<div class="divLog">
							Se connecter
						</div>

						<p>Vous avez un compte ?
							<br>
							Veuillez rentrer vos identifiants ici:
						</p>
						<!-- Partie login -->
						<form action="recupConnexion.php" method="post">

							<div><label>Votre identifiant :</label></div><input type="email" name="logmail" placeholder="exemple@mail.com"><br>
							<div><label>Votre mot de passe :</label></div><input type="password" name="mdp"><br>
							<input type="submit" value="Valider" class="confirm" /><br>
						</form>
						<!-- Fin partie login -->
					</div>
					<div class="seLog">
						<div class="divLog">
							S'inscrire
						</div>

						<p>Vous n'avez pas de compte ?
							<br>
							Veuillez rentrer vos identifiants ici:
						</p>
						<!-- Début partie inscription -->
						<form action="signin.php" method="post">

							<div><label>Nom :</label></div><input type="text" name="nom" placeholder="Votre Login">
							<br>
							<div><label>Mail :</label></div><input type="Mail" name="mail" placeholder="Votre Mail">
							<br>
							<div><label>Mot de passe :</label></div><input type="password" name="mdp" placeholder="Votre mot de passe">
							<br>
							<input type="submit" name="Valider"> <input type="reset" name="Annuler">
						</form>
						<!-- Fin partie inscription -->

					</div>
				</div>
		</section>
</header>

</html>
<script type="text/javascript">
	var modal = document.querySelector(".modal");
	var trigger = document.querySelector(".trigger");
	var closeButton = document.querySelector(".close-button-mod");

	function toggleModal() {
		modal.classList.toggle("show-modal");
	}

	function windowOnClick(event) {
		if (event.target === modal) {
			toggleModal();
		}
	}

	trigger.addEventListener("click", toggleModal);
	closeButton.addEventListener("click", toggleModal);
	window.addEventListener("click", windowOnClick);
</script>