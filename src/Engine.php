<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting(string $gameConditions)
{
    line("Welcome to the Brain Games!");
    global $name;
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("{$gameConditions}");
}

function question(string &$question): string
{
    line("Question: {$question}");
    $userResponse = prompt("You answer");
    return $userResponse;
}

function playerWinner(int $correctAnswerCount)
{
    global $name;
    if ($correctAnswerCount === 3) {
        line("Congratulations, {$name}!");
    }
}

function check(mixed $correctAnswer, mixed $userResponse, int &$correctAnswerCount)
{
    if ($correctAnswer == $userResponse) {
        line("Correct!");
        return $correctAnswerCount++;
    } else {
        global $name;
        line("'{$userResponse}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$name}!");
        exit;
    }
}
