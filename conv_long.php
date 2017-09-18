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
    	case 'mm':
    		switch($u_2){

            	case 'mm':
            		$result=$val;
            		break;
            	case 'cm':
            		$result=$val/10;
            		break;
            	case 'dm':
            		$result=$val/pow(10,2);
            		break;
                case 'm':
            		$result=$val/pow(10,3);
            		break;
            	case 'dam':
            		$result=$val/pow(10,4);
            		break;
            	case 'hm':
            		$result=$val/pow(10,5);
            		break;
            	case 'km':
            		$result=$val/pow(10,6);
            		break;

    		}

        break;
        case 'cm':
    		switch($u_2){

            	case 'mm':
            		$result=$val*10;
            		break;
            	case 'cm':
            		$result=$val;
            		break;
            	case 'dm':
            		$result=$val/10;
            		break;
                case 'm':
            		$result=$val/pow(10,2);
            		break;
            	case 'dam':
            		$result=$val/pow(10,3);
            		break;
            	case 'hm':
            		$result=$val/pow(10,4);
            		break;
            	case 'km':
            		$result=$val/pow(10,5);
            		break;

    		}
        break;
        case 'dm':
    		switch($u_2){

            	case 'mm':
            		$result=$val*pow(10,2);
            		break;
            	case 'cm':
            		$result=$val*pow(10,1);
            		break;
            	case 'dm':
            		$result=$val;
            		break;
                case 'm':
            		$result=$val/pow(10,1);
            		break;
            	case 'dam':
            		$result=$val/pow(10,2);
            		break;
            	case 'hm':
            		$result=$val/pow(10,3);
            		break;
            	case 'km':
            		$result=$val/pow(10,4);
            		break;

    		}

        break;
        case 'm':
    		switch($u_2){

            	case 'mm':
            		$result=$val*pow(10,3);
            		break;
            	case 'cm':
            		$result=$val*pow(10,2);
            		break;
            	case 'dm':
            		$result=$val*pow(10,1);
            		break;
                case 'm':
            		$result=$val;
            		break;
            	case 'dam':
            		$result=$val/pow(10,1);
            		break;
            	case 'hm':
            		$result=$val/pow(10,2);
            		break;
            	case 'km':
            		$result=$val/pow(10,3);
            		break;

    		}

        break;
        case 'dam':
    		switch($u_2){

            	case 'mm':
            		$result=$val*pow(10,4);
            		break;
            	case 'cm':
            		$result=$val*pow(10,3);
            		break;
            	case 'dm':
            		$result=$val*pow(10,2);
            		break;
                case 'm':
            		$result=$val*pow(10,1);
            		break;
            	case 'dam':
            		$result=$val;
            		break;
            	case 'hm':
            		$result=$val/pow(10,1);
            		break;
            	case 'km':
            		$result=$val/pow(10,2);
            		break;

    		}

        break;
        case 'hm':
    		switch($u_2){

            	case 'mm':
            		$result=$val*pow(10,5);
            		break;
            	case 'cm':
            		$result=$val*pow(10,4);
            		break;
            	case 'dm':
            		$result=$val*pow(10,3);
            		break;
                case 'm':
            		$result=$val*pow(10,2);
            		break;
            	case 'dam':
            		$result=$val/pow(10,1);
            		break;
            	case 'hm':
            		$result=$val;
            		break;
            	case 'km':
            		$result=$val/pow(10,1);
            		break;

    		}

        break;
        case 'km':
    		switch($u_2){

            	case 'mm':
            		$result=$val*pow(10,6);
            		break;
            	case 'cm':
            		$result=$val*pow(10,5);
            		break;
            	case 'dm':
            		$result=$val*pow(10,4);
            		break;
                case 'm':
            		$result=$val*pow(10,3);
            		break;
            	case 'dam':
            		$result=$val*pow(10,2);
            		break;
            	case 'hm':
            		$result=$val*pow(10,1);
            		break;
            	case 'km':
            		$result=$val;
            		break;

    		}

        break;
}
echo $result;
}



?>


