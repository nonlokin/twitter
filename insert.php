<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
		$text_zaprosa_vstavit = "INSERT INTO followings (name, channel, img)
								VALUES ('{$_GET["name"]}', '{$_GET["channel"]}', '{$_GET["img"]}')";
		$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);						
	?>
<?php
	header("Location: indexnew.php");
?>
