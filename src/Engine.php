<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting() : string
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    return $name;
}

function winner(string $name)
{
    line("Congratulations, %s", $name);
}

function loser(string $name)
{
    line("Let's try again, {$name}");
}