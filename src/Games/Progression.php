<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

function runProgression()
{
    $gameRule = "What number is missing in the progression?";
    $gameScore = 3;
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $correctAnswer = "";
        $progressionLength = 10;
        $randomNumber = rand(1, 10);
        $number = rand(1, 20);
        $progression = [];

        for ($index = 0; $index <= $progressionLength; $index++) {
            $progression[] = $number;
            $number += $randomNumber;
        }

        $randomIndex = array_rand($progression);
        $correctAnswer = $progression[$randomIndex];
        $progression[$randomIndex] = "..";
        $question = implode(" ", $progression);
        $correctAnswer = (string) $correctAnswer;

        $questions[] = $question;
        $correctAnswers[] = $correctAnswer;
    }
    runGame($gameRule, $questions, $correctAnswers);
}
