<?php

	include("common.php");
	
	$dbh = getReadOnlyConnection();
	
	$stmt = $dbh->prepare(
		"select * from gb_entries" .
		" where id = :id"
	);
	
	$stmt->bindValue(
		":id", 
		$_GET["id"], 
		PDO::PARAM_INT
	);
	
	$stmt->execute();
	
	$result = $stmt->fetchAll();
	
	$row = $result[0];
	
	getHeader();

	echo "<p>";
		echo "<a href='list.php'>Go Back</a>";
	echo "</p>";

	echo "<label>Name</label>";
	echo h($row["name"]);

	echo "<label>Email</label>";
	echo h($row["email"]);

	echo "<label>Message</label>";
	echo h($row["message"]);

	getFooter();

?>