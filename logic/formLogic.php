<?php
	$host = '127.0.0.1';
	$username = 'root';
	$password = '';
	$connection = mysql_connect($host,$username,$password);
	$db = mysql_select_db("informationBase");
	$query = mysql_query("insert into TourInfo(id,Name,Surname,TelephoneNumber,DateOut,DateIn,PlaceOfLiving,PlaceToGo) values(NULL,'".$_POST['TouristsName']."','".$_POST['TouristsSurname']."','".$_POST['TelephoneNumber']."','".$_POST['DateOfOut']."','".$_POST['DateOfIn']."','".$_POST['placeWhereLive']."','".$_POST['placeToGo']."')");
	if(!$query){
		echo "запрос не выполнен";
	}
	echo "<script></script>";
?>