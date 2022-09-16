<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting($gameConditions) : string
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("{$gameConditions}");
    return $name;
}

function question(&$question) : string
{
    line("Question: {$question}");
    $userResponse = prompt("You answer"); 
    return $userResponse;
}

function playerWinner(string $name, $correctAnswerCount)
{
    if ($correctAnswerCount === 3) {
        line("Congratulations, %s", $name);
    }
}

function playerLosing(string $name, string $userResponse, $correctAnswer)
{
    line("'{$userResponse}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
    line("Let's try again, {$name}");
}