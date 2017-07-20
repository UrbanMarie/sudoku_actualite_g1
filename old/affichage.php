<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Sudoku</title>
</head>
<body>
    <div>
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

    <table>
	<tbody ;>
        <?php	for ($i=1; $i<=$NbrLigne; $i++)
        { // ligne $i
    ?>		<tr style="border:width: 30px;">
    <?php		for ($j=1; $j<=$NbrCol; $j++)
    		{ // colonne $j
    			if ($k<$NbreData) {
    ?>			<td style="border: 2px solid black",>
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
    </div>

    <div id="region02">
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($tableau2);

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
                print_r ($tableau2[$k]);

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
    </div>

    <div id="region03">
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($tableau3);

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
                print_r ($tableau3[$k]);

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
    </div>

    <div id="region04">
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($tableau4);

if ($NbreData != 0)
{
    $k = 0; // indice du tableau
    $l = 0;

?>
    <table style="position: absolute; top: 10px; left: 65px">
    <tbody>
        <?php	for ($i=1; $i<=$NbrLigne; $i++)
        { // ligne $i
    ?>		<tr border="1">
    <?php		for ($j=1; $j<=$NbrCol; $j++)
            { // colonne $j
                if ($k<$NbreData) {
    ?>			<td>
    <?php
                print_r ($tableau4[$k]);

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
    </div>
    <div id="region05">
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($tableau5);

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
                print_r ($tableau5[$k]);

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
    </div>
    <div id="region06">
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($tableau6);

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
                print_r ($tableau6[$k]);

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
    </div>

    <div id="region07">
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($tableau7);

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
                print_r ($tableau7[$k]);

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
    </div>

    <div id="region08">
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($tableau8);

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
                print_r ($tableau8[$k]);

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
    </div>

    <div id="region09">
<?php
require 'test_conditions.php';
$NbrCol = 3;
$NbrLigne = 3;
$NbreData = count($tableau9);

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
                print_r ($tableau9[$k]);

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
    </div>
        </body>
        </html>
