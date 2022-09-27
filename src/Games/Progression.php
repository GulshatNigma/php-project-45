<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\getGreeting;

function progressionRun()
{
    $gameRule = "What number is missing in the progression?";

    for ($i = 0; $i < 3; $i++) {
        $correctAnswer = "";
        $randomNumber = rand(1, 10);
        $number = rand(1, 20);
        $array = [];

        for ($index = 0; $index <= 10; $index++) {
            $array[] = $number;
            $number += $randomNumber;
        }

        $randomIndex = array_rand($array);
        $correctAnswer = $array[$randomIndex];
        $array[$randomIndex] = "..";
        $question = implode(" ", $array);
        $correctAnswer = (string) $correctAnswer;

        $questionArray[] = $question;
        $correctAnswerArray[] = $correctAnswer;
    }
    getGreeting($gameRule, $questionArray, $correctAnswerArray);
}
