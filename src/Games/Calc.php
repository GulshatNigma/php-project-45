<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

function runCalculator()
{
    $gameRule = "What is the result of the expression?";
    $gameScore = 3;
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $operations = ["+", "-", "*"];
        $mathematicalOperations = $operations[array_rand($operations)];

        $question = ("{$randomNumber1} {$mathematicalOperations} {$randomNumber2}");

        switch ($mathematicalOperations) {
            case "+":
                $correctAnswer = $randomNumber1 + $randomNumber2;
                break;
            case "-":
                $correctAnswer = $randomNumber1 - $randomNumber2;
                break;
            case "*":
                $correctAnswer = $randomNumber1 * $randomNumber2;
                break;
        }
        $questions[] = $question;
        $correctAnswers[] = $correctAnswer;
    }
    runGame($gameRule, $questions, $correctAnswers);
}
