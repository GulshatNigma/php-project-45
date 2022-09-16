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

function quest(&$quest) : string
{
    line("Question: {$quest}");
    $userResponse = prompt("You answer"); 
    return $userResponse;
}

function playerWinner(string $name)
{
    line("Congratulations, %s", $name);
}

function playerLosing(string $name, string $userResponse)
{
    line("'{$userResponse}' is wrong answer ;(. Correct answer was '");  // {$correctAnswer}'");
    line("Let's try again, {$name}");
}