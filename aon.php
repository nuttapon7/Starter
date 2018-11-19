<?php
$strget = $_GET['p'];

if($strget=='a1'){
	echo 'get : a1';
}else
if($strget=='a2'){
	echo 'get : a2';
}else{
	echo "get else: ".$strget;
}
