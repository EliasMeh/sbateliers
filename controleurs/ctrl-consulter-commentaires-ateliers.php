<?php

	
	require "modeles/ModeleSBAteliers.php" ;
	
	$atelier = ModeleSBAteliers::getAtelier( $numAtelier ) ;
	
	$commentaires = ModeleSBAteliers::getCommentairesAtelier( $numAtelier ) ;
	$moncommentaire = ModeleSBAteliers::getMonCommentaireAtelier( $numAtelier ,$_SESSION["numero"]) ;
	$maparticipation = ModeleSBAteliers::getParticipations($_SESSION["numero"]);
	var_dump($maparticipation);
	foreach($maparticipation as $participation){
		if($participation['atelier'] == $numAtelier) {
			$trouve = true;
			break ;
		}
	}
	
		
	//if (in_array($numAtelier,$maparticipation == True){
	//	$bool = True ;
	//}
	//else{
	//	$bool = False ;
	//}
	//var_dump($moncommentaire);
	//for($i = 0; $i <= count($moncommentaire); $i++){
	//	echo $moncommentaire ;
	//	echo count($moncommentaire);
	//}
	if(count($moncommentaire)==0 and $trouve == true ){
		require "vues/vue-commentaires-atelier.php" ;
	}
	else{
		require "vues/vue-commentaires-atelier2.php" ;
	}
?>
