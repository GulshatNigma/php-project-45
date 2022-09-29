<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

function checkEvenRun()
{
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $even = 2;
    $gameScore = 3;
    $questionArray = [];
    $correctAnswerArray = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $question = rand(1, 100);
        $question % $even === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";

        $questionArray[] = $question;
        $correctAnswerArray[] = $correctAnswer;
    }
    runGame($gameRule, $questionArray, $correctAnswerArray);
}
