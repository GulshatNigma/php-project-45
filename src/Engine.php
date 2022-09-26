<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting(string $gameRule, $correctAnswer, $question)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("{$gameRule}");

    $correctAnswerCount = 0;
    $gameScore = 3;

    while ($correctAnswerCount < $gameScore) {

        line("Question: {$question}");
        $userAnswer = prompt("You answer");
        
        if ($correctAnswer == $userAnswer) {
            line("Correct!");
            $correctAnswerCount++;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$name}!");
        }
        if ($correctAnswerCount === $gameScore) {
            line("Congratulations, {$name}!");
        }
    }
}
