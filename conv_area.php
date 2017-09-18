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
    	case 'mm2':
    		switch($u_2){

            	case 'mm2':
            		$result=$val;
            		break;
            	case 'cm2':
            		$result=$val/pow(10,2);
            		break;
            	case 'dm2':
            		$result=$val/pow(10,4);
            		break;
                case 'm2':
            		$result=$val/pow(10,6);
            		break;
            	case 'dam2':
            		$result=$val/pow(10,8);
            		break;
            	case 'hm2':
            		$result=$val/pow(10,10);
            		break;

    		}

        break;
        case 'cm2':
            switch($u_2){

                case 'mm2':
                    $result=$val*pow(10,2);
                    break;
                case 'cm2':
                    $result=$val;
                    break;
                case 'dm2':
                    $result=$val/pow(10,2);
                    break;
                case 'm2':
                    $result=$val/pow(10,4);
                    break;
                case 'dam2':
                    $result=$val/pow(10,6);
                    break;
                case 'hm2':
                    $result=$val/pow(10,8);
                    break;

            }

        break;
            case 'dm2':
            switch($u_2){

                case 'mm2':
                    $result=$val*pow(10,4);
                    break;
                case 'cm2':
                    $result=$val*pow(10,2);
                    break;
                case 'dm2':
                    $result=$val;
                    break;
                case 'm2':
                    $result=$val/pow(10,2);
                    break;
                case 'dam2':
                    $result=$val/pow(10,4);
                    break;
                case 'hm2':
                    $result=$val/pow(10,8);
                    break;
            }

        break;
        case 'm2':
            switch($u_2){

                case 'mm2':
                    $result=$val*pow(10,6);
                    break;
                case 'cm2':
                    $result=$val*pow(10,4);
                    break;
                case 'dm2':
                    $result=$val*pow(10,2);
                    break;
                case 'm2':
                    $result=$val;
                    break;
                case 'dam2':
                    $result=$val/pow(10,2);
                    break;
                case 'hm2':
                    $result=$val/pow(10,4);
                    break;
            }

        break;
        case 'dam2':
    		switch($u_2){

                case 'mm2':
                    $result=$val*pow(10,6);
                    break;
                case 'cm2':
                    $result=$val*pow(10,4);
                    break;
                case 'dm2':
                    $result=$val*pow(10,8);
                    break;
                case 'm2':
                    $result=$val*pow(10,10);
                    break;
                case 'dam2':
                    $result=$val;
                    break;
                case 'hm2':
                    $result=$val/pow(10,2);
                    break;
            }

        break;
        case 'hm2':
    		switch($u_2){

            	case 'mm2':
            		$result=$val*pow(10,10);
            		break;
            	case 'cm2':
            		$result=$val*pow(10,8);
            		break;
            	case 'dm2':
            		$result=$val*pow(10,6);
            		break;
                case 'm2':
            		$result=$val*pow(10,4);
            		break;
            	case 'dam2':
            		$result=$val/pow(10,2);
            		break;
            	case 'hm2':
            		$result=$val;
            		break;
    		}

        break;
}
echo $result;
}



?>


