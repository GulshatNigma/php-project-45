<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\gameRun;

function calculatorRun()
{
    $gameRule = "What is the result of the expression?";
    $gameScore = 3;
    $questionArray = [];
    $correctAnswerArray = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $arrray = ["+", "-", "*"];
        $mathematicalOperations = $arrray[array_rand($arrray)];

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
        $questionArray[] = $question;
        $correctAnswerArray[] = $correctAnswer;
    }
    gameRun($gameRule, $questionArray, $correctAnswerArray);
}
