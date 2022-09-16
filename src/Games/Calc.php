<?php

namespace BrainCalc\Calc;

use function cli\line;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\playerLosing;
use function BrainGames\Engine\question;

function calculator()
{
    
    $gameConditions = "What is the result of the expression?";
    $name = getGreeting($gameConditions);

    $correctAnswerCount = 0;

    while($correctAnswerCount < 3) {
        
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $arrray = ["+", "-", "*"];
        $mathematicalOperations = $arrray[array_rand($arrray)];
        $question = ("{$randomNumber1} {$mathematicalOperations} {$randomNumber2}");

        $userResponse = question($question);

            if ($mathematicalOperations === "+") {
                $correctAnswer = $randomNumber1 + $randomNumber2;
                if ($correctAnswer == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    playerLosing($name, $userResponse, $correctAnswer);

                }
            }

            if ($mathematicalOperations === "-") {
                $correctAnswer = $randomNumber1 - $randomNumber2;
                if ($correctAnswer == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    playerLosing($name, $userResponse, $correctAnswer);
                    break;
                }
            }

            if ($mathematicalOperations === "*") {
                $correctAnswer = $randomNumber1 * $randomNumber2;
                if ($correctAnswer == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    playerLosing($name, $userResponse, $correctAnswer);
                    break;
                }
            }
            playerWinner($name, $correctAnswerCount);
    }
}
