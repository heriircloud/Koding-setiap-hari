<?php
function mengambilurl($tipe){
	if(isset($_SERVER['HTTPS'])){
    $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	}else{
		$protocol = 'http';
	}
  
  if($tipe=="0"){
		$url = $protocol . "://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //default
	}elseif($tipe=="1"){ 
		$url = $protocol; //protokol
	}elseif($tipe=="2"){ 
		$url = $_SERVER['HTTP_HOST']; //domain
	}elseif($tipe=="3"){ 
		$url = $protocol . "://" . $_SERVER['HTTP_HOST']; //protokol+domain
	}else{
		$url = $protocol . "://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; //default
	}
	
  return $url;
}

echo mengambilurl(1);
