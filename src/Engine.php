<?php

namespace BrainGames\Src\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting(string $gameRule, array $questionArray, array $correctAnswerArray)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("{$gameRule}");

    $correctAnswerCount = 0;
    $gameScore = 3;

    while ($correctAnswerCount < $gameScore) {
        $question = $questionArray[$correctAnswerCount];
        $correctAnswer = $correctAnswerArray[$correctAnswerCount];

        $userAnswer = getUserAnswer($question);

        if (checkUserAnswer($correctAnswer, $userAnswer, $correctAnswerCount, $name) === false) {
            break;
        }
    }
    if ($correctAnswerCount === $gameScore) {
        line("Congratulations, {$name}!");
    }
}

function getUserAnswer(string &$question): string
{
    line("Question: {$question}");
    $userAnswer = prompt("You answer");
    return $userAnswer;
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
