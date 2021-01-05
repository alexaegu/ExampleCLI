<?php

/*
Сделать консольное приложение, которое в терминале получает несколько чисел и передаёт их в класс. Вывести числа на экран из класса. Применяется технология интерфейса командной строки CLI (Command Line Interface).
*/

/*
Для реализации этой программы применяется массив $argv, в котором нулевой аргумент - название программы, а последующие - переданные значения (стринги)
*/

// $argv[0] - это стринг "program3.php"

// При запуске программы в консоли терминала пишем, например: php program3.php 4 3 1.23 -0.01

class ArgvArray
{
    private $ourArray = array();
    
    public function __construct(array $argv)
    {
        $i = 1;
        while (isset($argv[$i])) {
            $this->ourArray[$i] = $argv[$i];
            $i++;
        }
    }
    
    public function ourFunction()
    {
        foreach ($this->ourArray as $element) {
            echo $element.PHP_EOL;
        }
    }
}

$object = new ArgvArray($argv);
$object->ourFunction();
