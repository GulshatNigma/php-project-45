<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Src\Games\Even\getQuestion;

function getGreeting(string $gameRule, $correctAnswer)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("{$gameRule}");

    $correctAnswerCount = 0;
    $gameScore = 3;
    while ($correctAnswerCount < 3) {
        $question = getQuestion($correctAnswer);
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

