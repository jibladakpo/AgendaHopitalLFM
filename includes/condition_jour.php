<!-- conditions jour de pr�sence  -->
<!-- faire attention aux espace dans la base de donn�e -->
<?php
//sans chaque jours
if ($s->jour_presence == "lundi "){
	$list_dispo=array(1);
}
else if ($s->jour_presence == "mardi "){
	$list_dispo=array(2);
}
else if ($s->jour_presence == "mercredi "){
	$list_dispo=array(3);
}
else if ($s->jour_presence == "jeudi "){
	$list_dispo=array(4);
}
else if ($s->jour_presence == "vendredi "){
	$list_dispo=array(5);
}
else if ($s->jour_presence == "samedi "){
	$list_dispo=array(6);
}
else if ($s->jour_presence == "dimanche "){
	$list_dispo=array(7);
	
//sans de lundi � dimanche
}else if ($s->jour_presence == "lundi mardi "){
	$list_dispo=array(1,2);
}
else if ($s->jour_presence == "lundi mardi mercredi "){
	$list_dispo=array(1,2,3);
}
else if ($s->jour_presence == "lundi mardi mercredi jeudi "){
	$list_dispo=array(1,2,3,4);
}
else if ($s->jour_presence == "lundi mardi mercredi jeudi vendredi "){
	$list_dispo=array(1,2,3,4,5);
}
else if ($s->jour_presence == "lundi mardi mercredi jeudi vendredi samedi "){
	$list_dispo=array(1,2,3,4,5,6);
}
else if ($s->jour_presence == "lundi mardi mercredi jeudi vendredi samedi dimanche "){
	$list_dispo=array(1,2,3,4,5,6,7);
}

//sans mardi
else if ($s->jour_presence == "lundi mercredi jeudi "){
	$list_dispo=array(1,3,4);
}
else if ($s->jour_presence == "lundi mercredi jeudi vendredi "){
	$list_dispo=array(1,3,4,5);
}
else if ($s->jour_presence == "lundi mercredi jeudi vendredi samedi "){
	$list_dispo=array(1,3,4,5,6);
}
else if ($s->jour_presence == "lundi mercredi jeudi vendredi samedi dimanche "){
	$list_dispo=array(1,3,4,5,6,7);
}
else if ($s->jour_presence == "lundi mercredi "){
	$list_dispo=array(1,3);
}
else if ($s->jour_presence == "lundi jeudi "){
	$list_dispo=array(1,4);
}


//sans mercredi
else if ($s->jour_presence == "lundi mardi jeudi "){
	$list_dispo=array(1,2,4);
}
else if ($s->jour_presence == "lundi mardi jeudi vendredi "){
	$list_dispo=array(1,2,4,5);
}
else if ($s->jour_presence == "lundi mardi jeudi vendredi samedi "){
	$list_dispo=array(1,2,4,5,6);
}
else if ($s->jour_presence == "lundi mardi jeudi vendredi samedi dimanche "){
	$list_dispo=array(1,2,4,5,6,7);
}

//sans jeudi
else if ($s->jour_presence == "lundi mardi mercredi "){
	$list_dispo=array(1,2,3);
}
else if ($s->jour_presence == "lundi mardi mercredi vendredi "){
	$list_dispo=array(1,2,3,5);
}
else if ($s->jour_presence == "lundi mardi mercredi vendredi samedi "){
	$list_dispo=array(1,2,3,5,6);
}
else if ($s->jour_presence == "lundi mardi mercredi vendredi samedi dimanche "){
	$list_dispo=array(1,2,3,5,6,7);
}

//sans samedi

else if ($s->jour_presence == "lundi mardi mercredi jeudi vendredi dimanche "){
	$list_dispo=array(1,2,3,4,5,7);
}

//
else if ($s->jour_presence == "lundi mercredi "){
	$list_dispo=array(1,3);
}
else if ($s->jour_presence == "lundi jeudi "){
	$list_dispo=array(1,4);
}

//sans mardi et mercredi

else if ($s->jour_presence == "lundi jeudi vendredi "){
	$list_dispo=array(1,4,5);
}
else if ($s->jour_presence == "lundi jeudi vendredi samedi "){
	$list_dispo=array(1,4,5,6);
}
else if ($s->jour_presence == "lundi jeudi vendredi samedi dimanche "){
	$list_dispo=array(1,4,5,6,7);
}

//sans mardi mercredi jeudi
else if ($s->jour_presence == "lundi vendredi "){
	$list_dispo=array(1,5);
}

else if ($s->jour_presence == "lundi vendredi samedi "){
	$list_dispo=array(1,5,6);
}

else if ($s->jour_presence == "lundi vendredi samedi dimanche "){
	$list_dispo=array(1,5,6,7);
}

//sans mardi mercredi jeudi vendredi
else if ($s->jour_presence == "lundi samedi "){
	$list_dispo=array(1,6);
}

else if ($s->jour_presence == "lundi samedi dimanche "){
	$list_dispo=array(1,6,7);
}

//sans mardi mercredi jeudi vendredi samedi
else if ($s->jour_presence == "lundi dimanche "){
	$list_dispo=array(1,7);	
}

//sans lundi
else if ($s->jour_presence == "mardi mercredi "){
	$list_dispo=array(2,3);
}
else if ($s->jour_presence == "mardi mercredi jeudi "){
	$list_dispo=array(2,3,4);
}
else if ($s->jour_presence == "mardi mercredi jeudi vendredi "){
	$list_dispo=array(2,3,4,5);
}
else if ($s->jour_presence == "mardi mercredi jeudi vendredi samedi "){
	$list_dispo=array(2,3,4,5,6);
}
else if ($s->jour_presence == "mardi mercredi jeudi vendredi samedi dimanche "){
	$list_dispo=array(2,3,4,5,6,7);
}

//sans lundi mercredi
else if ($s->jour_presence == "mardi jeudi "){
	$list_dispo=array(2,4);
}
else if ($s->jour_presence == "mardi jeudi vendredi "){
	$list_dispo=array(2,4,5);
}
else if ($s->jour_presence == "mardi jeudi vendredi samedi "){
	$list_dispo=array(2,4,5,6);
}
else if ($s->jour_presence == "mardi jeudi vendredi samedi dimanche "){
	$list_dispo=array(2,4,5,6,7);
}

//sans lundi jeudi
else if ($s->jour_presence == "mardi vendredi "){
	$list_dispo=array(2,5);	
}
else if ($s->jour_presence == "mardi vendredi samedi "){
	$list_dispo=array(2,5,6);
}
else if ($s->jour_presence == "mardi vendredi samedi dimanche "){
	$list_dispo=array(2,5,6,7);
}

//sans lundi mercredi jeudi vendredi
else if ($s->jour_presence == "mardi samedi "){
	$list_dispo=array(2,6);
}
else if ($s->jour_presence == "mardi samedi dimanche "){
	$list_dispo=array(2,6,7);
}
else if ($s->jour_presence == "mardi dimanche "){
	$list_dispo=array(2,7);
}

//sans lundi mardi
else if ($s->jour_presence == "mercredi jeudi "){
	$list_dispo=array(3,4);
}

else if ($s->jour_presence == "mercredi jeudi vendredi "){
	$list_dispo=array(3,4,5);
}
else if ($s->jour_presence == "mercredi jeudi vendredi samedi "){
	$list_dispo=array(3,4,5,6);
}

else if ($s->jour_presence == "mercredi jeudi vendredi samedi dimanche "){
	$list_dispo=array(3,4,5,6,7);
}

//sans lundi mardi mercredi jeudi
else if ($s->jour_presence == "mercredi vendredi "){
	$list_dispo=array(3,5);
}

else if ($s->jour_presence == "mercredi vendredi samedi "){
	$list_dispo=array(3,5,6);
}
else if ($s->jour_presence == "mercredi vendredi samedi dimanche "){
	$list_dispo=array(3,5,6,7);
}

//sans lundi mardi jeudi vendredi
else if ($s->jour_presence == "mercredi samedi "){
	$list_dispo=array(3,6);
}
else if ($s->jour_presence == "mercredi samedi dimanche "){
	$list_dispo=array(3,6,7);
}
//sans tout sauf mercredi et dimanche

else if ($s->jour_presence == "mercredi dimanche "){
	$list_dispo=array(3,7);
}

//sans lundi mardi mercredi
else if ($s->jour_presence == "jeudi vendredi "){
	$list_dispo=array(4,5);
}

else if ($s->jour_presence == "jeudi vendredi samedi "){
	$list_dispo=array(4,5,6);
}

else if ($s->jour_presence == "jeudi vendredi samedi dimanche "){
	$list_dispo=array(4,5,6,7);
}

else if ($s->jour_presence == "jeudi samedi "){
	$list_dispo=array(4,6);
}
else if ($s->jour_presence == "jeudi samedi dimanche "){
	$list_dispo=array(4,6,7);
}
else if ($s->jour_presence == "jeudi dimanche "){
	$list_dispo=array(4,7);
}
else if ($s->jour_presence == "vendredi samedi "){
	$list_dispo=array(5,6);
}
else if ($s->jour_presence == "vendredi samedi dimanche "){
	$list_dispo=array(5,6,7);
}
else if ($s->jour_presence == "vendredi dimanche "){
	$list_dispo=array(5,7);
}
else if ($s->jour_presence == "samedi dimanche "){
	$list_dispo=array(6,7);
}

//sans mercredi jeudi samedi dimaanche

else if ($s->jour_presence == "lundi mardi vendredi "){
	$list_dispo=array(1,2,5);
}
//ajouter des conditions jours si erreurs



