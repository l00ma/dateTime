<?php

$nowTime = new DateTime('Europe/Paris');
$destinationTime = new DateTime('2001-01-08 14:15:00');
$diffTime = $destinationTime->diff($nowTime);
$minuteDiff = $diffTime->format('%i');

$minutes = $diffTime->days * 24 * 60;
$minutes += $diffTime->h * 60;
$minutes += $diffTime->i;
$fuel = $minutes / 10000;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateTime Quest</title>
</head>

<body>
    <p><?php echo $destinationTime->format('M') . ' ' .  $destinationTime->format('d') . ' ' .  $destinationTime->format('Y') . ' ' .   $destinationTime->format('A') . ' ' .  $destinationTime->format('g') . ':' .  $destinationTime->format('i'); ?> </p><br>
    <p><?php echo $nowTime->format('M') . ' ' .  $nowTime->format('d') . ' ' .  $nowTime->format('Y') . ' ' .   $nowTime->format('A') . ' ' .  $nowTime->format('g') . ':' .  $nowTime->format('i'); ?> </p><br>
    <p><?php echo $diffTime->format('différence : %y ans, %m mois ,%d jours, %h heures et %i minutes'); ?></p><br>
    <p><?php echo 'il faut ' . $fuel . ' litres de carburant' ?></p>

</body>

</html>