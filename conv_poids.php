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
        case 'mg':
			# code...
			switch ($u_2) {
				case  'mg':
				 	$result=$val;
					break;
				case  'cg':
				 	$result=$val/10;
					break;
				case 'dg':
					# code...
				   $result=$val/pow(10, 2);
					break;
				case 'g':
					# code...
				   $result=$val/pow(10, 3);
					break;	
				case 'dag':
					# code...
				   $result=$val/pow(10, 4);
					break;
				case  'hg':
					$result=$val/pow(10, 5);
					break;
				case  'kg':
					$result=$val/pow(10, 6);
					break;
				case  'q':
					$result=$val/pow(10, 8);
					break;
				case  't':
					$result=$val/pow(10, 9);
				break;
			}
		break;
		case 'cg':
			switch ($u_2) {
				case  'mg':
				 	$result=$val*10;
					break;
				case  'cg':
				 	$result=$val;
					break;
				case 'dg':
					# code...
				   $result=$val/pow(10, 1);
					break;
				case 'g':
					# code...
				   $result=$val/pow(10, 2);
					break;	
				case 'dag':
					# code...
				   $result=$val/pow(10, 3);
					break;
				case  'hg':
					$result=$val/pow(10, 4);
					break;
				case  'kg':
					$result=$val/pow(10, 5);
					break;
				case  'q':
					$result=$val/pow(10, 7);
					break;
				case  't':
					$result=$val/pow(10, 8);
				break;
			}
		break;
    case 'dg':
			switch ($u_2) {
				case  'mg':
				 	$result=$val*pow(10,2);
					break;
				case  'cg':
				 	$result=$val*pow(10,1);
					break;
				case 'dg':
					# code...
				   $result=$val;
					break;
				case 'g':
					# code...
				   $result=$val/pow(10, 1);
					break;	
				case 'dag':
					# code...
				   $result=$val/pow(10, 2);
					break;
				case  'hg':
					$result=$val/pow(10, 3);
					break;
				case  'kg':
					$result=$val/pow(10, 4);
					break;
				case  'q':
					$result=$val/pow(10, 6);
					break;
				case  't':
					$result=$val/pow(10, 8);
				break;
			}
		break;
	case 'g':
			switch ($u_2) {
				case  'mg':
				 	$result=$val*pow(10,3);
					break;
				case  'cg':
				 	$result=$val*pow(10,2);
					break;
				case 'dg':
					# code...
				   $result=$val*pow(10,1);
					break;
				case 'g':
					# code...
				   $result=$val;
					break;	
				case 'dag':
					# code...
				   $result=$val/pow(10, 1);
					break;
				case  'hg':
					$result=$val/pow(10, 2);
					break;
				case  'kg':
					$result=$val/pow(10, 3);
					break;
				case  'q':
					$result=$val/pow(10, 5);
					break;
				case  't':
					$result=$val/pow(10, 6);
				break;
			}
		break;
	case 'dag':
			switch ($u_2) {
				case  'mg':
				 	$result=$val*pow(10,4);
					break;
				case  'cg':
				 	$result=$val*pow(10,3);
					break;
				case 'dg':
					# code...
				   $result=$val*pow(10,2);
					break;
				case 'g':
					# code...
				   $result=$val*pow(10,1);
					break;	
				case 'dag':
					# code...
				   $result=$val;
					break;
				case  'hg':
					$result=$val/pow(10, 1);
					break;
				case  'kg':
					$result=$val/pow(10, 2);
					break;
				case  'q':
					$result=$val/pow(10, 4);
					break;
				case  't':
					$result=$val/pow(10, 5);
				break;
			}
		break;
	case 'hg':
			switch ($u_2) {
				case  'mg':
				 	$result=$val*pow(10,5);
					break;
				case  'cg':
				 	$result=$val*pow(10,4);
					break;
				case 'dg':
					# code...
				   $result=$val*pow(10,3);
					break;
				case 'g':
					# code...
				   $result=$val*pow(10,2);
					break;	
				case 'dag':
					# code...
				   $result=$val*pow(10,1);
					break;
				case  'hg':
					$result=$val;
					break;
				case  'kg':
					$result=$val/pow(10, 1);
					break;
				case  'q':
					$result=$val/pow(10, 3);
					break;
				case  't':
					$result=$val/pow(10, 4);
				break;
			}
		break;
	case 'kg':
			switch ($u_2) {
				case  'mg':
				 	$result=$val*pow(10, 6);
					break;
				case  'cg':
				 	$result=$val*pow(10, 5);
					break;
				case 'dg':
					# code...
				   $result=$val*pow(10, 4);
					break;
				case 'g':
					# code...
				   $result=$val*pow(10, 3);
					break;	
				case 'dag':
					# code...
				   $result=$val*pow(10, 2);
					break;
				case  'hg':
					$result=$val*pow(10, 1);
					break;
				case  'kg':
					$result=$val;
					break;
				case  'q':
					$result=$val/pow(10, 2);
					break;
				case  't':
					$result=$val/pow(10, 3);
				break;
			}
		break;
	case 'q':
			switch ($u_2) {
				case  'mg':
				 	$result=$val*pow(10, 8);
					break;
				case  'cg':
				 	$result=$val*pow(10, 7);
					break;
				case 'dg':
					# code...
				   $result=$val*pow(10, 6);
					break;
				case 'g':
					# code...
				   $result=$val*pow(10, 5);
					break;	
				case 'dag':
					# code...
				   $result=$val*pow(10, 4);
					break;
				case  'hg':
					$result=$val*pow(10, 3);
					break;
				case  'kg':
					$result=$val*pow(10, 2);
					break;
				case  'q':
					$result=$val;
					break;
				case  't':
					$result=$val/pow(10, 1);
				break;
			}
		break;
	case 't':
			switch ($u_2) {
				case  'mg':
				 	$result=$val*pow(10, 9);
					break;
				case  'cg':
				 	$result=$val*pow(10, 8);
					break;
				case 'dg':
					# code...
				   $result=$val*pow(10, 7);
					break;
				case 'g':
					# code...
				   $result=$val*pow(10, 6);
					break;	
				case 'dag':
					# code...
				   $result=$val*pow(10, 5);
					break;
				case  'hg':
					$result=$val*pow(10, 4);
					break;
				case  'kg':
					$result=$val*pow(10, 3);
					break;
				case  'q':
					$result=$val*pow(10, 1);
					break;
				case  't':
					$result=$val;
				break;
			}
		break;	
	}

echo $result;
}
