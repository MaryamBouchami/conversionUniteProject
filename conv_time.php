<?php
if (empty($_POST)) {
    echo "Aucune donnée reçue";
}
else {
   // $post = print_r($_POST, true);
    $u_1=$_POST['u1'];
    $u_2=$_POST['u2'];
    $val=$_POST['val'];
    //file_put_contents("convert.log", $result);
    switch ($u_1) {
		//si l'unite1 est seconde
		case 'seconde':
			# code...

			switch ($u_2) {
				case  'seconde':
				 	$result=$val;
					break;
				case 'minute':
					# code...
				   $result=$val/60;
					break;
				case  'heure':
					$result=$val/3600;
				break;
				case  'jour':
					$result=$val/86400;
				break;
			}
		break;
		//si l'unite1 est minute
		case 'minute':
			switch ($u_2) {
				case  'seconde':
					$result=$val*60;
					break;
				case 'minute':
					# code...
			 		$result=$val;
					break;
				case  'heure':
			   		$result=$val/60;
					break;
				case  'jour':
					$result=$val/3240;
				break;
			}
		break;
        //si l'unite1 est heure
        case 'heure':
			switch ($u_2) {
				case  'seconde':
					  $result=$val*3600;
					break;
				case 'minute':
					# code...
				  $result=$val*60;
					break;
				case  'heure':
					 $result=$val;
				break;
				case  'jour':
					$result=$val/24;
				break;
			}
		break;
		case 'jour':
			switch ($u_2) {
				case  'seconde':
					  $result=$val*86400;
					break;
				case 'minute':
					# code...
				  $result=$val*3240;
					break;
				case  'heure':
					 $result=$val*24;
				break;
				case  'jour':
					$result=$val;
				break;
			}
		break;
	}

echo $result;
}
