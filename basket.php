<?php
require_once ('class/Winkelmand.php');

// hier maken we geen connectie naar een databank
$items[1] = array('id' => 1, 'titel' => 'Gsm_1', 'prijs' => 10,'aantal' => 1);
$items[2] = array('id' => 2, 'titel' => 'Gsm_2', 'prijs' => 15,'aantal' => 1);
$items[3] = array('id' => 3, 'titel' => 'Gsm_3', 'prijs' => 19,'aantal' => 1);

$product = HTMLENTITIES($_GET['item']);


/*
echo '<pre>';
print_r($_items[$product]);
echo '</pre>';
die();
*/

$winkelmand = new Winkelmand();
$winkelmand->toevoegenAanMand($items[$product]);
/*
$winkelmand->verwijderenUitMand($items[$product]);
$winkelmand->verwijderenUitMand($items[$product]);
$winkelmand->verwijderenUitMand($items[$product]);
*/

echo '<pre>';
print_r($winkelmand->mandWeergeven());
echo '</pre>';
die();

?>
