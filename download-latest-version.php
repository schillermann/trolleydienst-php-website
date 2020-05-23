<?php
$counter_file_name = 'counter.txt';
$counter = (int)file_get_contents($counter_file_name);
file_put_contents($counter_file_name, ++$counter);
header('Location: /downloads/trolleydienst-php-1-6-1.zip');