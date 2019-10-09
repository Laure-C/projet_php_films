<?php

$pdo = connect();
$keyword = '%'.$_POST['genre'].'%';
$sql = "SELECT nom_genre FROM genre WHERE nom_genre LIKE (:genre) ORDER BY code_genre ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$nom_genre = str_replace($_POST['genre'], '<b>'.$_POST['genre'].'</b>', $rs['nom_genre']);
	// add new option
    echo '<li onclick="set_item(\''.$rs['nom_genre'].'\')">'.$nom_genre.'</li>';
}

?>