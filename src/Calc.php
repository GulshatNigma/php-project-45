<?php

namespace BrainCalc\Calc;

use function cli\line;
use function cli\prompt;

function calculator()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("What is the result of the expression?");
}