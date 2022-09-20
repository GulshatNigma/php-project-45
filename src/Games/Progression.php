<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\isPlayerWinner;
use function BrainGames\Engine\getUserAnswer;
use function BrainGames\Engine\check;

function progression()
{
    $correctAnswer = "";
    $gameConditions = "What number is missing in the progression?";
    getGreeting($gameConditions);

    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $randomNumber = rand(1, 10);
        $number = rand(1, 20);
        $array = [];

        for ($i = 0; $i <= 10; $i++) {
            $array[] = $number;
            $number += $randomNumber;
        }

        $randomIndex = array_rand($array);
        $correctAnswer = $array[$randomIndex];
        $array[$randomIndex] = "..";
        $question = implode(" ", $array);
        $userAnser = getUserAnswer($question);

        $correctAnswer = (string) $correctAnswer;
        check($correctAnswer, $userAnser, $correctAnswerCount);
    }
    isPlayerWinner($correctAnswerCount);
}
