<?php
echo "<table border =\"1\" width = 180px>";
	for ($row=1; $row <= 10; $row++) {
		echo "<tr> \n";
		for ($col=1; $col <= 3; $col++) {
		   $p = pow($row,$col);
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
