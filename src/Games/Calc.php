<?php

namespace BrainCalc\Calc;

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\playerLosing;
use function BrainGames\Engine\quest;

function calculator()
{
    
    $name = getGreeting();
    line("What is the result of the expression?");

    $correctAnswerCount = 0;

    while($correctAnswerCount < 3) {
        
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $arrray = ["+", "-", "*"];
        $mathematicalOperations = $arrray[array_rand($arrray)];
        $quest = ("{$randomNumber1} {$mathematicalOperations} {$randomNumber2}");

        $userResponse = quest($quest);

            if ($mathematicalOperations === "+") {
                $correctAnswer = $randomNumber1 + $randomNumber2;
                if ($correctAnswer == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    playerLosing($name, $userResponse);

                }
            }

            if ($mathematicalOperations === "-") {
                $correctAnswer = $randomNumber1 - $randomNumber2;
                if ($correctAnswer == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    playerLosing($name, $userResponse);
                    break;
                }
            }

            if ($mathematicalOperations === "*") {
                $correctAnswer = $randomNumber1 * $randomNumber2;
                if ($correctAnswer == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    playerLosing($name, $userResponse);
                    break;
                }
            }

        if ($correctAnswerCount === 3) {
            playerWinner($name);
        }
    }

}
