<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\isPlayerWinner;
use function BrainGames\Engine\getUserAnswer;
use function BrainGames\Engine\check;

function gcdGreeting()
{
    $gameConditions = "Find the greatest common divisor of given numbers.";
    getGreeting($gameConditions);
}

function gcdRun()
{
    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $question = "{$randomNumber1} {$randomNumber2}";
        $userAnser = getUserAnswer($question);

        while ($randomNumber1 !== $randomNumber2) {
            if ($randomNumber1 > $randomNumber2) {
                $randomNumber1 -= $randomNumber2;
            } elseif ($randomNumber1 < $randomNumber2) {
                $randomNumber2 -= $randomNumber1;
            }
        }
        $correctAnswer = (string) $randomNumber1;
        check($correctAnswer, $userAnser, $correctAnswerCount);
    }
    isPlayerWinner($correctAnswerCount);
}
