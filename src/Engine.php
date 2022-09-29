<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $gameRule, array $questions, array $correctAnswers)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line($gameRule);

    $correctAnswerCount = 0;
    $gameScore = 3;

    while ($correctAnswerCount < $gameScore) {
        $question = $questions[$correctAnswerCount];
        $correctAnswer = $correctAnswers[$correctAnswerCount];
        $correctAnswerCount++;

        line("Question: {$question}");
        $userAnswer = prompt("You answer");

        if ($correctAnswer != $userAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$name}!");
            break;
        }

        line("Correct!");
    }
    if ($correctAnswerCount === $gameScore) {
         line("Congratulations, {$name}!");
    }
}
