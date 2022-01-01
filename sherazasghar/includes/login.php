<?
$pass = $_POST['pass'];
if (($pass == "panda") || ($neoID == "geoID" )){
		$login = "none";
		$content = "block";
		$header = "block";
		} else {
		$login = "block";
		$content ="none";
		$header = "none";
		}

?>