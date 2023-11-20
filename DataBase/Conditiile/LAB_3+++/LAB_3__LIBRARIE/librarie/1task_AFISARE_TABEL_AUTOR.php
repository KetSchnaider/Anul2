<?php
require_once 'connectare.php'; // conectam scriptul connecatare la server si BD
$link = mysqli_connect($host, $user, $password, $database);
$query = "SELECT * FROM autor"; //Operatia de selectare in variabila de lucru $query
$result = mysqli_query($link,$query);
$rows = mysqli_num_rows($result); // Numarul de inscrieri primite
// Tipar istantaneu tabel in PHP
echo '<table border="5" align="center" width="380px">
	    <caption><strong>Informatia despre autori</strong></caption>';
echo '		<tr>
				  <th> ID_AUTOR  </th>
				  <th> NUME_AUTOR  </th>
				  <th> IDCARTE  </th>
		</tr>';
		
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) 
			{
				echo "<td>$row[$j]</td>";
			}
        echo "</tr>";
    }
    echo "</table>";
?>	