<?php

namespace BrainGames\Src\Games\Progression;

use function BrainGames\Src\Engine\getGreeting;

function progressionRun()
{
    $gameRule = "What number is missing in the progression?";
    $gameScore = 3;
    $questionArray = [];
    $correctAnswerArray = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $correctAnswer = "";
        $progressionLength = 10;
        $randomNumber = rand(1, 10);
        $number = rand(1, 20);
        $array = [];

        for ($index = 0; $index <= $progressionLength; $index++) {
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
