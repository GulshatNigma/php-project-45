<?php

namespace BrainCalc\Calc;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\playerLosing;
use function BrainGames\Engine\question;
use function BrainGames\Engine\correctAnswer;

function calculator()
{
    $gameConditions = "What is the result of the expression?";
    $name = getGreeting($gameConditions);

    $correctAnswerCount = 0;
    while ($correctAnswerCount < 3) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $arrray = ["+", "-", "*"];
        $mathematicalOperations = $arrray[array_rand($arrray)];

        $question = ("{$randomNumber1} {$mathematicalOperations} {$randomNumber2}");
        $userResponse = question($question);

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
            if ($correctAnswer == $userResponse) {
                        correctAnswer($correctAnswerCount);
            } else {
                        playerLosing($name, $userResponse, $correctAnswer);
            }
        }
        playerWinner($name, $correctAnswerCount);
    }
