<?php

$iterator = new AppendIterator();
$iterator->append(new DirectoryIterator('../'));
$iterator->append(new DirectoryIterator('/'));

foreach ($iterator as $item) {
    echo $item."<br>";
}