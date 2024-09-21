<html>
<body>

	<form method="POST">
     Enter date: <input type="text" name="date"/>
     <br>
     <br>
     Enter days: <input type="number" name="day">
     <br>
     <br>
     <input type="submit" name="submit"/>
     <br>
	</form>

<?php

if(isset($_POST['submit']))
{

$date = date_create($_POST['date']);
$day = $_POST['day'];

}

date_add($date,date_interval_create_from_date_string("$day days"));
echo date_format($date,"Y-m-d");

?>

</body>
</html>