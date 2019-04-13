<?php

require("objects.php");

$slownik = new Books("Słownik", "Ktoskto Siezna");
$podrecznik = new Books("Podręcznik", "Jan Kowalski");
$miliardy = new Books("Miliardy białych płatków", "Czesław Bałczyński");

echo $slownik->title." ".$slownik->author."<br/>";
echo $podrecznik->title." ".$podrecznik->author."<br/>";
echo $miliardy->title." ".$miliardy->author."<br/>";


?>

