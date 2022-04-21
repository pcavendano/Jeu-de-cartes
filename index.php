<!--
Comments in a PHP file

not <! –– ––>


Tets d'utilisation des constantes
define -> TITLE majuscules, guimets simples.
pour l'utiliser TITLE -> sans $ sign

define works inside iterative structures
const only works outside iterative structures
-->
<?php
define ('TITLE', 'Activité 9');

include 'head.php';
?>
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
</html>