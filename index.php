<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project for project</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<script type="text/javascript" src="jquery/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<form action="logic/formLogic.php" name="MainForm" method="POST">
				<span>Имя*</span>
				<input class="form-control" type="text" name="TouristsName">
				<span>Фамилия*</span>
				<input class="form-control" type="text" name="TouristsSurname">
				<span>Контактный номер телефона*</span>
				<input class="form-control" type="tel" name="TelephoneNumber" id="TelephoneNumber">
				<span>Дата отправки</span>
				<input class="form-control" type="date" name="DateOfOut">
				<span>Дата прибытия</span>
				<input class="form-control" type="date" name="DateOfIn">
				<span>Город проживания</span>
				<select class="form-control" name="placeWhereLive">
					<?php
						$host = '127.0.0.1';
						$username = 'root';
						$password = '';
						$connection = mysql_connect($host,$username,$password);
						$db = mysql_select_db("referenceBase");
						$result = mysql_query("select * from Cities");
						while ($row = mysql_fetch_array($result)){
							echo "<option>".$row['NameOfCity']."</option>";
						}
					?>
				</select>
				<span>Место назначения</span>
				<select class="form-control" name="placeToGo">
					<?php
						$host = '127.0.0.1';
						$username = 'root';
						$password = '';
						$connection = mysql_connect($host,$username,$password);
						$db = mysql_select_db("referenceBase");
						$result = mysql_query("select * from Cities");
						while ($row = mysql_fetch_array($result)){
							echo "<option>".$row['NameOfCity']."</option>";
						}
					?>
				</select>
				<span>Итоговая цена тура</span>
				<label name="PriceOfTour"></label><br>
				<button class="btn btn-primary btn-lg" id="SendTheInfo" name="SendTheInfo">Поехали!</button>
			</form>
			<script type="text/javascript" src="js/myscript.js"></script>
		</div>
	</div>
</body>
</html>