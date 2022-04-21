<! –– and the comment closes with ––>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Activite 9</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
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