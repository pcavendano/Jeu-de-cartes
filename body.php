<body>
<?php
echo("<p>Hellojkwedhweidh</p>");

?>
<?php
// code php pour déterminer
// le contenu de la variable $accord
$accord = "OUI";
?>
<section>
	<h1>Devis</h1>
	<?php
	if ($accord == "OUI") {
		?>
		<p>Accepté</p>
		<?php
	} else {
		?>
		<p>Refusé</p>
		<?php
	}
	?>
</section>


<script type="text/javascript" src="app.js">
    console.log("Hello");
</script>
</body>