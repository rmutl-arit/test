<?php

$startTime = time();
$runSeconds = 5;
$rounds = 5;
$count = 0;
for ($i=0; $i<$rounds; $i++) {
    while ((time()-$startTime) <= $runSeconds) {
        serialize(['bar'=>'foo']);
        $count ++;
    }
    $round = $i+1;
    $startTime += $runSeconds;
    $count = number_format($count);
    echo "Round {$round}: {$count} /per {$runSeconds} second\n" . '<br>';
    $count = 0;
}