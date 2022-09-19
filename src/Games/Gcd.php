<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\question;
use function BrainGames\Engine\check;

function gcd()
{
    $gameConditions = "Find the greatest common divisor of given numbers.";
    $name = getGreeting($gameConditions);

    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $question = "{$randomNumber1} {$randomNumber2}";
        $userResponse = question($question);

        while ($randomNumber1 !== $randomNumber2) {
            if ($randomNumber1 > $randomNumber2) {
                $randomNumber1 -= $randomNumber2;
            } elseif ($randomNumber1 < $randomNumber2) {
                $randomNumber2 -= $randomNumber1;
            }
        }
        $correctAnswer = $randomNumber1;
        check($correctAnswer, $userResponse, $correctAnswerCount);
    }
    playerWinner($correctAnswerCount);
}
