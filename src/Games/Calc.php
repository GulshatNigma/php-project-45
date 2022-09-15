<?php

namespace BrainCalc\Calc;

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\playerLosing;

function calculator()
{
    

    $name = getGreeting();
    line("What is the result of the expression?");

    $correctAnswerCount = 0;

    while($correctAnswerCount < 3) {
        
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $arrray = ["+", "-", "*"];
        $arrrayIndex = array_rand($arrray);
        $mathematicalOperations = $arrray[$arrrayIndex];

        line("Question: {$randomNumber1} {$mathematicalOperations} {$randomNumber2}");
        $userResponse = prompt("You answer");

            if ($mathematicalOperations === "+") {
                $result = $randomNumber1 + $randomNumber2;
                if ($result == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    line("'{$userResponse}' is wrong answer ;(. Correct answer was '{$result}'");
                    playerLosing($name);
                    break;
                }
            }

            if ($mathematicalOperations === "-") {
                $result = $randomNumber1 - $randomNumber2;
                if ($result == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    line("'{$userResponse}' is wrong answer ;(. Correct answer was '{$result}'");
                    playerLosing($name);
                    break;
                }
            }

            if ($mathematicalOperations === "*") {
                $result = $randomNumber1 * $randomNumber2;
                if ($result == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    line("'{$userResponse}' is wrong answer ;(. Correct answer was '{$result}'");
                    playerLosing($name);
                    break;
                }
            }

        if ($correctAnswerCount === 3) {
            playerWinner($name);
        }
    }

}
