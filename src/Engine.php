<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting(string $gameRule, $correctAnswer, $question): string
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("{$gameRule}");

    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';

    $correctAnswerCount = 0;
    $gameScore = 3;

    while ($correctAnswerCount < 3) {
        line("Question: {$question}");
        $userAnswer = prompt("You answer");
        
        if ($correctAnswer == $userAnswer) {
            line("Correct!");
            return $correctAnswerCount++;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$name}!");
            return false;

            if ($correctAnswerCount === $gameScore) {
                line("Congratulations, {$name}!");
            }
        }


    }
}
