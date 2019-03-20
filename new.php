<?php
	include("common.php");
	
	getHeader();

		echo "<h2>New Guestbook Entry</h2>";

		echo "<form action='create.php' method='POST'>";
			echo "<label>Name</label>";
			echo "<input type='text' name='name' />";
			
			echo "<label>Email</label>";
			echo "<input type='text' name='email' />";

			echo "<label>Message</lable>";
			echo "<textarea name='message'></textarea>";

			echo "<input type='submit' />";
		echo "</form>";

	getFooter();

?>

