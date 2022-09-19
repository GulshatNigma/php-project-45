<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\question;
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
        $correctAnswer .= $array[$randomIndex];
        $array[$randomIndex] = "..";
        $question = implode(" ", $array);
        $userResponse = question($question);

        check($correctAnswer, $userResponse, $correctAnswerCount);
    }
    playerWinner($correctAnswerCount);
}
