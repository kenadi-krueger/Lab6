<?php

$cols = 100;
$rows = 100;

echo "<table border=\"1\">";

        for ($r =0; $r < $rows; $r++){

            echo'<tr>';

            for ($c = 0; $c < $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>'; 

        }

  echo"</table>";

  ?>