<?php
	
	include("common.php");
	
	$dbh = getReadOnlyConnection();
	
	$stmt = $dbh->prepare(
		"select * from gb_entries" .
		" order by id"
	);
	
	$stmt->execute();
	
	$result = $stmt->fetchAll();
	
	getHeader();

	echo "<a href='new.php'>New Entry</a>";
	
	echo "<ul>";
		foreach($result as $row) {
			$url = "single.php?id=".$row["id"];
			echo "<li>";
				echo "<a href='".$url."'>";
					echo "Entry from".h($row["name"]);
				echo "</a>";
			echo "</li>";
		}
	echo "</ul>";
	
	getFooter();

?>
