<?php

$iterator = new FilesystemIterator('.', FilesystemIterator::KEY_AS_FILENAME | FilesystemIterator::CURRENT_AS_FILEINFO);

print_r(iterator_to_array($iterator));
