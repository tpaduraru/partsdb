<html>
	<head>
		<title>Tekniton North Highlands Stock</title>
	</head>
	<body>
		<?php
			$db = new SQLite3('parts.db');
			$sql = 'SELECT number, quantity, description FROM NorthHighlands;';
			$result = $db->query($sql);
		?>
		<table>
			<tr>
				<th>Part Number</th>
				<th>Quantity</th>
				<th>Description</th>
			</tr>
			<?php
				while ($row=$result->fetchArray())
				{
					echo "<tr>";
					echo "<td>";
					echo $row[number];
					echo "</td>";
					echo "<td>";
					echo $row[quantity];
					echo "</td>";
					echo "<td>";
					echo $row[description];
					echo "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>


