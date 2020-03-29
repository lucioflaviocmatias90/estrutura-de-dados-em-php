<?php

echo "<p>Utilizando a função <b>opendir</b></p>";

$diretorio = opendir('./');

while (($file = readdir($diretorio)) != false) {
    if (!preg_match('|\.pdf$|i', $file)) {
        continue;
    }
    print "File: $file <br>";
}

echo "<p>Utilizando a classe <b>DirectoryIterator</b></p>";

$iterator = new DirectoryIterator('./');
$iterator = new RegexIterator($iterator, '|\.pdf$|i');

foreach ($iterator as $file) {
    echo "File :".$file->getPathname()."<br>";
}
