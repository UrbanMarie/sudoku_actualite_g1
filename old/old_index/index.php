<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Sudoku</title>
</head>
<body>

<?php
require'test_conditions.php';
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique AVANT affichage

$NbrCol = 9;
$NbrLigne = 9;
$tableau1= array(8,6,2,4,9,1,5,7,3);
$tableau2= array(4,2,9,6,1,7,5,3,8);
$tableau3= array(8,6,1,9,5,2,3,4,7);
$tableau4= array(3,9,8,2,1,4,7,6,5);
$tableau5= array(2,1,6,9,3,4,5,7,8);
$tableau6= array(7,6,3,8,1,2,4,9,5);
$tableau7= array(1,9,2,6,3,8,7,5,4);
$tableau8= array(7,1,4,2,8,3,6,5,9);
$tableau9= array(5,9,4,1,8,6,7,2,3);

// $grand_tableau = array( $tableau1,
//                         $tableau2,
//                         $tableau3,
//                         $tableau4,
//                         $tableau5,
//                         $tableau6,
//                         $tableau7,
//                         $tableau8,
//                         $tableau9);
//                     );
//print_r($grand_tableau);

// -------------------------------------------------------
// nombre de cellules à remplir
$NbreData = count($tableau1);
// -------------------------------------------------------
// calcul du nombre de lignes
// if (round($NbreData/$NbrCol)!=($NbreData/$NbrCol)) {
// 	$NbrLigne = round(($NbreData/$NbrCol)+0.5);
// } else {
// 	$NbrLigne = $NbreData/$NbrCol;
// }
// -------------------------------------------------------
// affichage
if ($NbreData != 0)
{
	$k = 0; // indice du tableau
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
	<tr>
			<td>
<?php
			print_r ($tableau1[$k]);
?>			</td>
	</tr>

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
