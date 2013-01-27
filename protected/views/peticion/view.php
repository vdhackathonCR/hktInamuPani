<?php
echo "<table>";
			foreach($model as $row)
			{
				echo "<tr class=\"odd\">";
				echo "<td>";
				echo $row["pregunta"];
				echo "</td>";
				echo "</tr>";
				echo "<tr class=\"even\">";
				echo "<td>";
				echo $row["respuesta"];
				echo "</td>";
				echo "</tr>";
			}
echo "</table>";
?>