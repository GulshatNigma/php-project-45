<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'What number is missing in the progression?';

function runProgression()
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
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
    runGame(GAME_RULE, $questions, $correctAnswers);
}
