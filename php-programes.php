<?php 
echo "Here you can check the output: http://rbtemplates.com/php-programes/index.php";
echo '<H1>Program 1</h1>';
echo rbtPatternLogic_1($ln = 10);
echo '<H1>Program 2</h1>';
echo rbtPatternLogic_2("programingspark");
echo '<H1>Program 3</h1>';
echo rbtPatternLogic_3();
function rbtPatternLogic_1($ln = 5){

	$output_html = '';
	$l1 = $ln;

	$len = $l1*2; 
	$hh = 0;
	for($i =0; $i < $len; $i++){
		 
		for($j =0; $j < $len; $j++){
			
			if($j == $l1){
				if($i == 0){
					$output_html .= "-";
				}
				$output_html .=  "*";
				for ($h= 0; $h < $hh ; $h++) { 
					$output_html .=  '--';
				}
				if($hh != 0){
					$output_html .=  "*";
				}
				$hh++;
				break;
			} else if($j >= $l1){
				 $h2 = $len - $i;
				for ($h3= $h2; $h3 < $ln ; $h3++) { 
					$output_html .=  '-';
				}
				$output_html .=  "*";
				for ($h= $h2; $h > 0 ; $h--) { 
					$output_html .=  '--';
				}
				$output_html .=  "*";
				if($h2 == 1){
					$output_html .=  "<br>";
					  $h2 = $ln;
					 for ($h3= $h2; $h3 > 0 ; $h3--) { 
						$output_html .=  '-';
					 }

					$output_html .=  "-";
					$output_html .=  "*";
				}
				$h2--;
				break;	
			}else{
				$output_html .=  '-';
			}
		}

		$l1--;

		$output_html .=  "<br>";
	}

	return $output_html;
}





// Your code here!

function rbtPatternLogic_2($text = "programingspark"){

$html  = '';
$str_leng = strlen($text);
$html .= $text;
$html .= "<br>";
$last_line = '';
	for($i = 1; $i < $str_leng; $i++){
	    $html .= $text[$i]; 

	    if($i == ($str_leng-1)){
	    	$html .= $last_line;
	    }else{
	    	for($j = 1; $j < ($str_leng-2); $j++){
	    		$html .= "_";
			}
		}
		$html .= $text[$str_leng-($i+1)];
		$last_line .= $text[$str_leng-($i+1)];
		$html .= "<br>";
	}
	return $html;
}



// program 1
function rbtPatternLogic_3(){

	$output_html = '';

	for($i = 0; $i < 8; $i++){
		for($j = 0; $j < 8; $j++){

			if($i%2 == 0){
				if($j%2 == 0){
				$output_html .= "<div class='white'></div>";
				}else{
					$output_html .=  "<div class='black'></div>";
				}
			}else{
				if($j%2 == 0){
						$output_html .=  "<div class='black'></div>";
				}else{
					$output_html .=  "<div class='white'></div>";
				}
			}
			
			
		
		}
		$output_html .=  "<br>";
		$output_html .=  '<style>.border{ border:1px solid black;height: 100px; }
		.white{width: 100px; background-color: white;height: 100px;display: inline-block;border: 1px solid red;}
		.black{width: 100px; background-color: black;height: 100px;display: inline-block;border: 1px solid red;}</style>';
		
	}
	return $output_html;
}
