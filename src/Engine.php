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

function checkUserAnswer(string $correctAnswer, string $userAnswer, int &$correctAnswerCount, string $name)
{
    if ($correctAnswer == $userAnswer) {
        line("Correct!");
        return $correctAnswerCount++;
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$name}!");
        return false;
    }
}

function isPlayerWinner(int $correctAnswerCount, string $name)
{
    $gameScore = 3;
    if ($correctAnswerCount === $gameScore) {
        line("Congratulations, {$name}!");
    }
}
