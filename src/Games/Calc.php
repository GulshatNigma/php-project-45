<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\isPlayerWinner;
use function BrainGames\Engine\getUserAnswer;
use function BrainGames\Engine\checkUserAnswer;

function calculatorRun()
{
    $gameRule = "What is the result of the expression?";
    $name = getGreeting($gameRule);
    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $arrray = ["+", "-", "*"];
        $mathematicalOperations = $arrray[array_rand($arrray)];

        $question = ("{$randomNumber1} {$mathematicalOperations} {$randomNumber2}");
        $userAnser = getUserAnswer($question);

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
        $correctAnswer = (string) $correctAnswer;
        if (checkUserAnswer($correctAnswer, $userAnser, $correctAnswerCount, $name) === false) {
            break;
        }
    }
    isPlayerWinner($correctAnswerCount, $name);
}
