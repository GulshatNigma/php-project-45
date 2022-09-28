<?php

namespace BrainGames\Src\Engine;

use function cli\line;
use function cli\prompt;

function gameRun(string $gameRule, array $questionArray, array $correctAnswerArray)
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

        line("Question: {$question}");
        $userAnswer = prompt("You answer");

        if ($correctAnswer == $userAnswer) {
            line("Correct!");
            $correctAnswerCount++;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$name}!");
            break;
        }
    }
    if ($correctAnswerCount === $gameScore) {
        line("Congratulations, {$name}!");
    }
}
