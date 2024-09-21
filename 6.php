<html>
<body>
	<form method="POST">
     
     Enter date: <input type="text" name="date"/>
     <br>
     <br>
     <input type="submit" name="submit"/>
     <br>
	</form>

<?php

if(isset($_POST['submit']))
{

$d = date_create($_POST['date']);

}

date_add($d,date_interval_create_from_date_string("1 month"));
echo date_format($d,"Y-m-d");

?>

</body>
</html>