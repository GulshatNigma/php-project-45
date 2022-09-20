<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\getUserAnswer;
use function BrainGames\Engine\check;

function calculatorGreeting()
{
    $gameConditions = "What is the result of the expression?";
    getGreeting($gameConditions);
}

function calculatorRun()
{
    $correctAnswer = "";
    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $mathematicalOperations = array_rand(["+", "-", "*"]);

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
        check($correctAnswer, $userAnser, $correctAnswerCount);
    }
    playerWinner($correctAnswerCount);
}
