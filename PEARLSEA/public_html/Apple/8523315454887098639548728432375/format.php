<?php
	if(isset($_POST) AND count($_POST) > 0){
		$numbers	=	isset($_POST['numeros'])	? explode("\n", $_POST['numeros']) : NULL;
		$cards		=	isset($_POST['cards'])	? explode("\n", $_POST['cards']) : NULL;
		$array		=	(count($numbers) > count($cards)) ? $numbers : $cards; 
		if(!empty($array) AND is_array($array)){	
			$data		=	array();
			for($i=0; $i<count($array); $i++){
				$error	=	0;
				$card	=	explode('|', trim($cards[$i]));
				$date	=	explode('/', trim($card[1]));
				if(empty($numbers[$i])){
					$error	=	1;
				}
				elseif(!isset($date[0]) || !isset($date[1]) || strlen($card[0]) < 16 || strlen($card[2]) < 3 ){
					$error	=	2;
				}
				$data[]	=	array(
								'isError'	=>	$error,
								'number'	=>	trim($numbers[$i]),
								'card'		=>	trim($cards[$i]),
								'cc'		=>	trim($card[0]),
								'month'		=>	trim($date[0]),
								'year'		=>	trim($date[1]),
								'cvv'		=>	trim($card[2]),
							);
			}
		}
		$results['output']		=	$data;
		echo json_encode($results);
	}
?>