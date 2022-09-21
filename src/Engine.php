<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting(string $gameRule): string
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("{$gameRule}");
    return $name;
}

function getUserAnswer(string &$question): string
{
    line("Question: {$question}");
    $userAnser = prompt("You answer");
    return $userAnser;
}

function checkUserAnswer(string $correctAnswer, string $userAnser, int &$correctAnswerCount, string $name)
{
    if ($correctAnswer == $userAnser) {
        line("Correct!");
        return $correctAnswerCount++;
    } else {
        line("'{$userAnser}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$name}!");
        exit();
    }
}

function isPlayerWinner(int $correctAnswerCount, string $name)
{
    if ($correctAnswerCount === 3) {
        line("Congratulations, {$name}!");
    }
}
