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

        line("Question: {$question}");
        $userAnswer = prompt("You answer");

        if (checkUserAnswer($correctAnswer, $userAnswer, $correctAnswerCount, $name) === false) {
            break;
        }
    }
    if ($correctAnswerCount === $gameScore) {
        line("Congratulations, {$name}!");
    }
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
