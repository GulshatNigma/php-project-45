<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\getGreeting;

function gcdRun()
{
    $gameRule = "Find the greatest common divisor of given numbers.";

    for ($i = 0; $i < 3; $i++) {
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
    getGreeting($gameRule, $questionArray, $correctAnswerArray);
}
