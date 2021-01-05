<?php

/*
Сделать консольное приложение, которое в терминале из одного переданного числа извлекает корень степени второго переданного числа. Например, если мы передаём в консоли числа 4 и 3, то извлекается кубический корень из четырёх. Применяется технология интерфейса командной строки CLI (Command Line Interface).
*/

/*
Для реализации этой программы применяется массив $argv, в котором нулевой аргумент - название программы, а последующие - переданные значения (стринги)
*/

// $argv[0] - это стринг "program2.php"

// При запуске программы в консоли терминала пишем, например: php program2.php 4 3

echo ((float)$argv[1] ** (1/(float)$argv[2])).PHP_EOL; 
