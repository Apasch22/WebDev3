<?php

$f=fopen('data.txt', 'w');
fwrite($f, 'hello there');
fclose($f);