<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
		$text_zaprosa_vstavit = "INSERT INTO twits2 (author, img, twit)
								VALUES ('{$_GET["author"]}', '{$_GET["img"]}', '{$_GET["post"]}')";
		$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);						
	?>
<?php
	header("Location: indexnew.php");
?>
