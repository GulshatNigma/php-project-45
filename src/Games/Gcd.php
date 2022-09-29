<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\gameRun;

function gcdRun()
{
    $gameRule = "Find the greatest common divisor of given numbers.";
    $gameScore = 3;
    $questionArray = [];
    $correctAnswerArray = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $question = "{$randomNumber1} {$randomNumber2}";

        while ($randomNumber1 !== $randomNumber2) {
            if ($randomNumber1 > $randomNumber2) {
                $randomNumber1 -= $randomNumber2;
            } elseif ($randomNumber1 < $randomNumber2) {
                $randomNumber2 -= $randomNumber1;
            }
        }
        $correctAnswer = (string) $randomNumber1;
        $questionArray[] = $question;
        $correctAnswerArray[] = $correctAnswer;
    }
    gameRun($gameRule, $questionArray, $correctAnswerArray);
}
