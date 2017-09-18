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
		case 'c':
			# code...
			switch ($u_2) {
				case  'c':
				 	$result=$val;
					break;
				case 'k':
				   $result=$val+213.15;
					break;
				case  'f':
					$result=($val*1.8)+32;
				break;
			}
		break;
		//si l'unite1 est minute
		case 'k':
			switch ($u_2) {
				case  'c':
				 	$result=$val-213.15;
					break;
				case 'k':
					# code...
				   $result=$val;
					break;
				case  'f':
					$result=($val-213)*1.8+32;
				break;
			}
		break;
        //si l'unite1 est heure
        case 'f':
			switch ($u_2) {
				case  'c':
				 	$result=($val-32)*5/9;
					break;
				case 'k':
					# code...
				   $result=(($val-32)*5/9)+213.15;
				   break;
				case  'f':
					$result=$val/3600;
				    break;
			}
		break;
	}

echo $result;
}
