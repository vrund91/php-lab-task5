<html>
<body>
	<form method="POST">
        
    Enter day of week: <input type="text" name="day"/>
    <br>
    <br>
    <input type="submit" name="submit"/>
    <br>

	</form>

<?php

if(isset($_POST['submit']))
{

  $date = strtotime($_POST['day']);

}

if($date == strtotime("Saturday"))
{
	echo "It is weekend";
}

elseif ($date == strtotime("Sunday")) {
	echo "It is weekend";
}

else
{
	echo "Normal day";
}

?>

</body>
</html>