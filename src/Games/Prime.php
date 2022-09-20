<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\isPlayerWinner;
use function BrainGames\Engine\getUserAnswer;
use function BrainGames\Engine\check;

function getGreeetingPrime()
{
    $gameConditions = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    getGreeting($gameConditions);
}

function primeRun()
{
    $correctAnswer = "no";
    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $number = rand(1, 100);
        $question = $number;
        $userAnser = getUserAnswer($question);

        if ($number !== 1) {
            $correctAnswer = "yes";
            for ($i = 2; $i < $number; $i++) {
                if ($number % $i === 0) {
                    $correctAnswer = "no";
                }
            }
        }
        check($correctAnswer, $userAnser, $correctAnswerCount);
    }
    isPlayerWinner($correctAnswerCount);
}
