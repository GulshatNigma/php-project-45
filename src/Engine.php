<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting(string $gameRule)
{
    line("Welcome to the Brain Games!");
    global $name;
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("{$gameRule}");
}

function getUserAnswer(string &$question): string
{
    line("Question: {$question}");
    $userAnser = prompt("You answer");
    return $userAnser;
}

function checkUserAnswer(string $correctAnswer, string $userAnser, int &$correctAnswerCount)
{
    if ($correctAnswer == $userAnser) {
        line("Correct!");
        return $correctAnswerCount++;
    } else {
        global $name;
        line("'{$userAnser}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$name}!");
        exit;
    }
}

function isPlayerWinner(int $correctAnswerCount)
{
    global $name;
    if ($correctAnswerCount === 3) {
        line("Congratulations, {$name}!");
    }
}
