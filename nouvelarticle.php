<?php
//var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require "connection.php";

	$sql = "INSERT INTO article(titre,contenu,publication)
    VALUE('" . $_POST['titre'] . "','"
		. $_POST['contenu'] . "','"
		. $_POST['publication'] . "')";

	$result = mysqli_query($conn, $sql);
	if ($result === false) {
		echo mysqli_error($conn);
		echo "il y a un problème";
	} else {
		$id = mysqli_insert_id($conn);
	}
};
?>

<?php
include 'head.php'; ?>


<div class="container">


	<?php

	include 'headerbackoffice.php';


	?>
	<div class=bloc6>
		<div class="container">
			<form method="post">

				<label for="titre">Titre</label>
				<input id="titre" name="titre" id="titre">
				<!-- <select name="Image">
                
            </select> -->
				<label for="contenu">Contenu</label>
				<textarea id="contenu" name="contenu" required></textarea>
				<label for="publication">Date</label>
				<input type="datetime-local" name="publication" id="publication">

				<br>
				<button>Envoyer</button>
			</form>
		</div>
		</body>



		</form>

	</div>


</div>
</div>
</form>
<nav>
	<ul>



		<input type="search" placeholder="Rechercher...">

	</ul>

</nav>
<main>
	</section>


</main>
<script src="effet.js"></script>
<?php

include 'footer.php';

?>
</div>

<div class="copyright py-4 text-center text-white">
	<div class="container">
		<small>Copyright &copy; Axel Gonon</small>
	</div>
	</body>

	</html>