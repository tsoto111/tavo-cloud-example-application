<?php 

	function getReadOnlyConnection() {
		return new PDO(
			"pgsql:host=localhost;".
			"port=5432;dbname=guestbookapp;".
			"user=gbuser;password=mypassword"
		);
	}

	function getReadWriteConnection() {
		return new PDO(
			"pgsql:host=localhost;".
			"port=5432;dbname=guestbookapp;".
			"user=gbuser;password=mypassword"
		);
	}

	function getHeader() {
		echo "<html>";
			echo "<head>";
				echo "<title>Guestbook App</title>";
				echo "<link rel='stylesheet' href='guestbook.css' />";
			echo "</head>";
			echo "<body>";
				echo "<h1>Guestbook App</h1>";
				echo "<div id='main'>";
	}

	function getFooter() {
				echo "</div>";
			echo "</body>";
		echo "</html>";
	}

	function h($str) {
		return htmlspecialchars($str);
	}

?>
