<?php

namespace trapezaiv\hangman\View;

function showGame($faultCount, $progress)
{
//псведографика
    $graphic = array (
    " +---+\n     |\n     |\n     |\n    ===\n ",
    " +---+\n 0   |\n     |\n     |\n    ===\n ",
    " +---+\n 0   |\n |   |\n     |\n    ===\n ",
    " +---+\n 0   |\n/|   |\n     |\n    ===\n ",
    " +---+\n 0   |\n/|\  |\n     |\n    ===\n ",
    " +---+\n 0   |\n/|\  |\n/    |\n    ===\n ",
    " +---+\n 0   |\n/|\  |\n/ \  |\n    ===\n "
    );

    \cli\line($graphic[$faultCount]);
    \cli\line($progress);

    echo "\n";
}
function showList()
{
    echo "Список игр из БД SQLite3 (Пока не поддерживается)\n";
}

function showReplay()
{
    echo "Повтор игры\n";
}

function help()
{
    echo '+----------------------------------------------------------------+
|                        Помощь по игре                          |
+----------------------------------------------------------------+
| Компьютер загадывает английское слово из шести букв Ваша       |
| задача - угадать буквы, а затем и все слово целиком.           |
| Если Вы правильно угадывает букву, компьютер вписывает ее      |
| в клетку. Если ошибаетесь, то рисует одну из частей тела       |
| повешенного человека. Чтобы победить, Вам нужно угадать все    |
| буквы в слове до того, как повешенный человечек будет          |
| полностью нарисован.                                           |
+----------------------------------------------------------------+
|                             Ключи                              |
+----------------------------------------------------------------+
| --new - Новая игра                                             |
| --list - Список игр                                            |
| --replay - Повтор игры                                         |
| --help - Помощь                                                |
+----------------------------------------------------------------+' . PHP_EOL;
}
