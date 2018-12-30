<?php
	$db = new SQLite3('parts.db');
	$sql = 'select * from NorthHighlands;';
	$result = $db->query($sql);
	while ($row=$result->fetchArray())
	{
		var_dump($row);
	}
?>
