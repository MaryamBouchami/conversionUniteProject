<?php
if (empty($_POST)) {
    echo "Aucune donnée reçue";
}
else {
   // $post = print_r($_POST, true);
    $u_1=$_POST['u1'];
    $u_2=$_POST['u2'];
    $val=$_POST['val'];
    switch($u_1){
    	case 'mm3':
    		switch($u_2){

            	case 'mm3':
            		$result=$val;
            		break;
            	case 'cm3':
            		$result=$val/pow(10,3);
            		break;
            	case 'dm3':
            		$result=$val/pow(10,6);
            		break;
                case 'm3':
            		$result=$val/pow(10,9);
            		break;
            	case 'dam3':
            		$result=$val/pow(10,12);
            		break;
            	case 'hm3':
            		$result=$val/pow(10,15);
            		break;
                case 'km3':
                    $result=$val/pow(10,18);
                    break;
    		}

        break;
        case 'cm3':
            switch($u_2){

                case 'mm3':
                    $result=$val*pow(10,3);
                    break;
                case 'cm3':
                    $result=$val;
                    break;
                case 'dm3':
                    $result=$val/pow(10,3);
                    break;
                case 'm3':
                    $result=$val/pow(10,6);
                    break;
                case 'dam3':
                    $result=$val/pow(10,9);
                    break;
                case 'hm3':
                    $result=$val/pow(10,12);
                    break;
                case 'km3':
                    $result=$val/pow(10,15);
                    break;
            }

        break;
            case 'dm3':
            switch($u_2){

                case 'mm3':
                    $result=$val*pow(10,6);
                    break;
                case 'cm3':
                    $result=$val*pow(10,3);
                    break;
                case 'dm3':
                    $result=$val;
                    break;
                case 'm3':
                    $result=$val/pow(10,3);
                    break;
                case 'dam3':
                    $result=$val/pow(10,6);
                    break;
                case 'hm3':
                    $result=$val/pow(10,9);
                    break;
                case 'km3':
                    $result=$val/pow(10,12);
                    break;
            }

        break;
        case 'm3':
            switch($u_2){

                case 'mm3':
                    $result=$val*pow(10,9);
                    break;
                case 'cm3':
                    $result=$val*pow(10,6);
                    break;
                case 'dm3':
                    $result=$val*pow(10,3);
                    break;
                case 'm3':
                    $result=$val;
                    break;
                case 'dam3':
                    $result=$val/pow(10,3);
                    break;
                case 'hm3':
                    $result=$val/pow(10,6);
                    break;
                case 'km3':
                    $result=$val/pow(10,9);
                    break;
            }
        break;
        case 'dam3':
    		switch($u_2){

                case 'mm3':
                    $result=$val*pow(10,12);
                    break;
                case 'cm3':
                    $result=$val*pow(10,9);
                    break;
                case 'dm3':
                    $result=$val*pow(10,6);
                    break;
                case 'm3':
                    $result=$val*pow(10,3);
                    break;
                case 'dam3':
                    $result=$val;
                    break;
                case 'hm3':
                    $result=$val/pow(10,3);
                    break;
                case 'km3':
                    $result=$val/pow(10,6);
                    break;
            }

        break;
        case 'hm3':
    		switch($u_2){

                case 'mm3':
                    $result=$val*pow(10,15);
                    break;
                case 'cm3':
                    $result=$val*pow(10,12);
                    break;
                case 'dm3':
                    $result=$val*pow(10,9);
                    break;
                case 'm3':
                    $result=$val*pow(10,6);
                    break;
                case 'dam3':
                    $result=$val*pow(10,3);
                    break;
                case 'hm3':
                    $result=$val;
                    break;
                case 'km3':
                    $result=$val/pow(10,3);
                    break;
            }
        break;
        case 'km3':
            switch($u_2){

                case 'mm3':
                    $result=$val*pow(10,18);
                    break;
                case 'cm3':
                    $result=$val*pow(10,15);
                    break;
                case 'dm3':
                    $result=$val*pow(10,12);
                    break;
                case 'm3':
                    $result=$val*pow(10,9);
                    break;
                case 'dam3':
                    $result=$val*pow(10,6);
                    break;
                case 'hm3':
                    $result=$val*pow(10,3);
                    break;
                case 'km3':
                    $result=$val;
                    break;
            }
        break;
}
echo $result;
}



?>


