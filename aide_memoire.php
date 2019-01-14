
<?php  
	echo "bonjour";  /*affiche du texte*/
	$ageduvisiteur = 20; /*"$" pour donner une variable, nom comme on veut mais fais rien du tout, permet de stoquer la variable*/
	echo $ageduvisiteur; /*affiche variable "ageduvisiteur"*/

	$prix = 10;
	$nbr = 4;
	$total = $prix * $nbr;		/*permet de faire des calcules*/
	echo $total;

	$estcevrai= true; /*peu aussi être "false"*/

	$age= 8;
	if ($age<=18); /*variable, si moin que 18, écrit il faut être adulte, "==" 2 = pour mettre égale à 18, "!=" si X différent*/
	{ echo "il faut être adulte "; }
	else
	{echo "bienvenu";}

	$adulte = false; /*même chose mais aver boulet*/
	if (!$adulte and $JSP == "JSP") /* "$adulte" si veut dire si adulte vrai et */
		{echo "tu n'es pas un adulte";}
	else   /*peut couper en deux le code php et mettre du html*/
	{ ?>
		<p>tu es adulte</p> 
<?php
	}
	switch ($age) {		/*permet de tester les différentes variables plus rapidement qu'avec "if"*/
		case 4:
			echo "tu as 4 ans";
			break;
		case 6:
			echo "tu as 6 ans";
			break;
		case 90:
			echo "tu es vieux!";
			break;
	}

	$répétition = 0; /*permet de réécrire ou faire une action en boucle*/
	while ( $répétition <10) {
		echo "je refais le texte"; /*peut mettre '<p> je refais le texte</p>' va remettre à la ligne*/
		$répétition = $répétition + 1; /* même chose que "$répétition++" */
	}

	$répétition = 0; /*même chose mais marque le nombre de fois à la fin*/
	while ( $répétition < 10) {
		echo '<p>je refais le texte ' . $répétition. ' fois</p>';
		$répétition++;
	}

	for ($répétition = 0; $répétition  < 10 ; $répétition ++) { /*mettre toute les données dnas la parenthèse*/
		echo '<p> bonjour' . $répétition .'</p>';
	}


	$prénoms [0] = "lucas"; /*fais un tableau, commence toujours par 0*/
	$prénoms [1] = "noé";
	$prénoms [2] = "mat";
	$prénoms [3] = "andré";
	echo print_r ($prénoms); /*utiliser seulement pour débeuguer*/
	
	}

	$personnes  = array('nom' => "richard", "prénom" => "lucas", "age" => "19" ); /*même chose qu'en haut, autre forme. afficher avec echo $X [nombre de la case]*/
	foreach ($personnes as $libelle => $nom) { /*boucle pour tableau, énumère toutes les cases d'un tableau, fonctionne que pour tableau "array" pour récupérer "nom", "prénom",... devant mais pas obligé*/
		echo "<p>". $nom . "</p>";
	}

	$phrase = "bonjour, ca va ?"; /* "strlen"compte le nombre de caractère dans "$phrase"*/
$nbrdecaractère = strlen($phrase); /*permet de stoquer la variabel mais pas obligé*/
$phrasemélangée = str_shuffle($phrase) /*mélange tout les caractère d'une phrase*/

echo date("d.m.y"); /*affiche la date d'aujourd'hui*/

/*possibilité de créé une fonction*/

 include ("nomdufichier.php"); /*mettre une balise PHP dans html*/
	?>