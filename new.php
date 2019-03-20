<?php
	include("common.php");
	
	getHeader();

		echo "<h2>New Guestbook Entry</h2>";

		echo "<form action='create.php' method='POST'>";
			echo "<div class='field-group'>";
				echo "<label>Name</label>";
				echo "<input type='text' name='name' />";
			echo "</div>";

			echo "<div class='field-group'>";
				echo "<label>Email</label>";
				echo "<input type='text' name='email' />";
			echo "</div>";

			echo "<div class='field-group'>";
				echo "<label>Message</label>";
				echo "<textarea name='message'></textarea>";
			echo "</div>";

			echo "<input type='submit' />";
		echo "</form>";

	getFooter();

?>

