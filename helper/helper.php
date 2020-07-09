<?php
    function Redirect($url){
        echo "<script>self.location = '{$url}';</script>";
        die();
    }

function CreateRand($id= null){
	$stId="";
	for ($i = 0 ; $i <2; $i++) {
	 $arr = range("A", "Z");
	 $rand = rand(0 , 25);
	 $stId .=  $arr[$rand];
	}
	$stId .= rand(10,100);

	for ($i = 0 ; $i <2; $i++) {
	  $arr = range("A", "Z");
	  $rand = rand(0 , 25);
	  $stId .=  $arr[$rand];
	 }

	 $stId .= date("y");

	 for ($i = 0 ; $i <1; $i++) { 
	   $arr = range("A", "Z");
	   $rand = rand(0 , 25);
	   $stId .=  $arr[$rand];
	  }
	 $stId .= $id;
	return $stId;
}



function ajaxUrl(){
	$url = $_SERVER['HTTP_REFERER'];
	$url = explode("/", $url);
	array_pop($url);
	$url = implode("/", $url);
	echo   $url;
	return $url;
};





?>
