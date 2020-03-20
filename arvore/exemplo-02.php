<?php

$maxHeap = new SplMaxHeap();

$maxHeap->insert(1);
$maxHeap->insert(100);
$maxHeap->insert(15);
$maxHeap->insert(17);
$maxHeap->insert(110);
$maxHeap->insert(11);

// echo "Elemento no topo: ".$maxHeap->extract()."<br>";

foreach ($maxHeap as $max) {
    echo $max."<br>";
}

echo "<hr>";

$minHeap = new SplMinHeap();

$minHeap->insert(1);
$minHeap->insert(100);
$minHeap->insert(15);
$minHeap->insert(17);
$minHeap->insert(110);
$minHeap->insert(11);

// echo "Elemento no topo: ".$minHeap->extract()."<br>";

foreach ($minHeap as $min) {
    echo $min."<br>";
}
