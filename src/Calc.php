<?php

namespace BrainCalc\Calc;

use function cli\line;
use function cli\prompt;

function calculator()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line("What is the result of the expression?");

    $correctAnswerCount = 0;

    while($correctAnswerCount < 3) {
        
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $arrray = ["+", "-", "*"];
        $arrrayIndex = array_rand($arrray);
        $mathematicalOperations = $arrray[$arrrayIndex];

        line("Question: " . $randomNumber1 . " " . $mathematicalOperations . " " . $randomNumber2);
        $userResponse = prompt("You answer");

            if ($mathematicalOperations === "+") {
                $result = $randomNumber1 + $randomNumber2;
                if ($result == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    echo("'" . $userResponse . "' is wrong answer ;(. Correct answer was '" . $result . "'" . "\n");
                    line("Let's try again, %s", $name);
                    break;
                }
            }

            if ($mathematicalOperations === "-") {
                $result = $randomNumber1 - $randomNumber2;
                if ($result == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    echo("'" . $userResponse . "' is wrong answer ;(. Correct answer was '" . $result . "'" . "\n");
                    line("Let's try again, %s", $name);
                    break;
                }
            }

            if ($mathematicalOperations === "*") {
                $result = $randomNumber1 * $randomNumber2;
                if ($result == $userResponse) {
                    line("Correct!");
                    $correctAnswerCount++;
                } else {
                    echo("'" . $userResponse . "' is wrong answer ;(. Correct answer was '" . $result . "'" . "\n");
                    line("Let's try again, %s", $name);
                    break;
                }
            }

        if ($correctAnswerCount === 3) {
            line("Congratulations, %s", $name);
        }
    }

}
