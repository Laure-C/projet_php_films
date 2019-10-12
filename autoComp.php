<?php
// p = pays, n = nationnalité, r = réalisateur
function auto_completion($choix, $listeElements){

	$pdo = connect_bd();
	if ($choix == 'p'){
		$keyword = '%'.$_POST['Pays'].'%';
		$sql = "SELECT pays FROM films WHERE pays LIKE (:Pays) ORDER BY pays ";
		$query = $pdo->prepare($sql);
		$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
		$query->execute();
		$list = $query->fetchAll();
		foreach ($list as $rs) {
	
			$nom_pays = str_replace($_POST['Pays'], '<b>'.$_POST['Pays'].'</b>', $rs['pays']);
			echo '<li onclick="set_item(\''.$rs['pays'].'\')">'.$nom_pays.'</li>';
		}
	}

	if ($choix == 'n'){
		$keyword = '%'.$_POST['Nationnalite'].'%';
		$sql = "SELECT nationalite FROM individus WHERE nationalite LIKE (:Nationnalite) ORDER BY nationalite ASC LIMIT 0, 10";
		$query = $pdo->prepare($sql);
		$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
		$query->execute();
		$list = $query->fetchAll();
		foreach ($list as $rs) {
	
			$nom_nationnalite = str_replace($_POST['Nationnalite'], '<b>'.$_POST['Nationnalite'].'</b>', $rs['nationalite']);
			echo '<li onclick="set_item(\''.$rs['nationalite'].'\')">'.$nom_nationnalite.'</li>';
		}
	}
	// if ($choix == 'r'){
	// 	$keyword = '%'.$_POST[''].'%';
	// 	$sql = "SELECT nom_genre FROM genre WHERE nom_genre LIKE (:genre) ORDER BY code_genre ASC LIMIT 0, 10";
	// 	$query = $pdo->prepare($sql);
	// 	$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
	// 	$query->execute();
	// 	$list = $query->fetchAll();
	// 	foreach ($list as $rs) {
	
	// 		$nom_real = str_replace($_POST['genre'], '<b>'.$_POST['genre'].'</b>', $rs['nom_genre']);
	// 		echo '<li onclick="set_item(\''.$rs['nom_genre'].'\')">'.$nom_real.'</li>';
	// 	}
	// }

}

?>