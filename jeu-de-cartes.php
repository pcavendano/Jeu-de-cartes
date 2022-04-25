<?php
echo "<p>Cartes sans melanger</p>";
$tb_coeur = [];
$tb_piques = [];
$tb_dames = [];
$tb_carreau = [];
$utf_cards = "&#1271";
$card_nb = 37;
$card_position = 0;
for ($compteur = 0; $compteur < 56; $compteur +=1) {
	if($compteur <14){
		$tb_coeur[$card_position] = $utf_cards.$card_nb;
		$card_nb +=1;
		echo $tb_coeur[$card_position];
		$card_position +=1;
	}
	if($compteur == 14){
		$card_nb +=2;
		echo "<br>";
		$card_position=0;

	}
	if($compteur == 28){
		$card_nb +=2;
		echo "<br>";
		$card_position=0;
	}
	if($compteur == 42){
		$card_nb +=2;
		echo "<br>";
		$card_position=0;
	}
	if($compteur >= 14 && $compteur < 28){
		$tb_carreau[$card_position] = $utf_cards.$card_nb;
		$card_nb +=1;
		echo '<div class="red">'.$tb_carreau[$card_position].'</div>';
		$card_position +=1;
	}
	if($compteur >= 28 && $compteur < 42){
		$tb_piques[$card_position] = $utf_cards.$card_nb;
		$card_nb +=1;
		echo '<div class="red">'.$tb_piques[$card_position].'</div>';
		$card_position +=1;
	}
	if($compteur >= 42 && $compteur < 56){
		$tb_dames[$card_position] = $utf_cards.$card_nb;
		$card_nb +=1;
		echo $tb_dames[$card_position];
		$card_position +=1;
	}

}
echo "<br>";
echo "<br>";
echo "<p>Cartes melangés</p>";
function melanger ($tab_piques, $tab_dames, $tab_carreau, $tb_coeurs){
	$mix_cards_2= [];
	$mix_cards_1= [];
	for($i = 0; $i < count($tab_piques); $i += 1){
		array_push($mix_cards_2,$tab_dames[$i]);
		array_push($mix_cards_2,$tab_piques[$i]);
		echo $tab_dames[$i] ;
		echo '<div class="red">'.$tab_piques[$i].'</div>' ;
		if(($i+1) % 7 == 0 && $i != 0 && $i != 1){
			echo "<br>";
		}

	}
	for($i = 0; $i < count($tab_carreau) ; $i += 1){
		 array_push($mix_cards_1,$tab_carreau[$i]);
		array_push($mix_cards_1,$tb_coeurs[$i]);
		echo '<div class="red">'.$tab_carreau[$i].'</div>' ;
		echo $tb_coeurs[$i] ;
		if(($i+1) % 7 == 0 && $i != 0 && $i != 1){
			echo "<br>";
		}
	}
}


melanger($tb_carreau,$tb_coeur,$tb_dames,$tb_piques);

?>