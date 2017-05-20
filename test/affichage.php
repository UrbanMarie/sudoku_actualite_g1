<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Sudoku</title>
</head>
<body>
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($grand_tableau);

if ($NbreData != 0)
{
	$k = 0; // indice du tableau
    $l = 0;

?>
    <table border="1">
	<tbody>
        <?php	for ($i=1; $i<=$NbrLigne; $i++)
        { // ligne $i
    ?>		<tr>
    <?php		for ($j=1; $j<=$NbrCol; $j++)
    		{ // colonne $j
    			if ($k<$NbreData) {
    ?>			<td>
    <?php
    			print_r ($tableau1[$k]);

    ?>			</td>

    <?php			$k++;
    			} else { // cellule vide
    ?>			<td>&nbsp;</td>
    <?php			}
    		}
    ?>		</tr>
    <?php	}
    ?>
    	</tbody>
    	</table>

        <?php
        } else { ?>
        	pas de données à afficher
        <?php
        }
        ?>

        </body>
        </html>
