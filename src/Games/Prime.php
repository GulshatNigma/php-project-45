<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\getGreeting;

function primeRun()
{
    $gameRule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameScore = 3;
    $questionArray = [];
    $correctAnswerArray = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $correctAnswer = "no";
        $number = rand(1, 100);
        $question = $number;

        if ($number !== 1) {
            $correctAnswer = "yes";
        }
        for ($index = 2; $index < $number; $index++) {
            if ($number % $index === 0) {
                $correctAnswer = "no";
            }
        }
        $questionArray[] = $question;
        $correctAnswerArray[] = $correctAnswer;
    }
    getGreeting($gameRule, $questionArray, $correctAnswerArray);
}
