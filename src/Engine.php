<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function getGreeting(string $gameRule, $correctAnswer, $question): bool
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
            echo ($correctAnswerCount);
            $result = true;
            return $result;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$name}!");
            $result = false;
            return $result;
        }
        if ($correctAnswerCount === $gameScore) {
            line("Congratulations, {$name}!");
            $result = false;
            return $result;
        }
    }
}
