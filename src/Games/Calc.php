<?php

namespace BrainGames\Src\Games\Calc;

use function BrainGames\Engine\getGreeting;


function calculatorRun()
{
    $gameRule = "What is the result of the expression?";

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
        getGreeting($gameRule, $correctAnswer, $question);
    }
