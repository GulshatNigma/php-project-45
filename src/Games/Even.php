<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

function RunCheckEven()
{
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $even = 2;
    $gameScore = 3;
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $question = rand(1, 100);
        $question % $even === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";

        $questions[] = $question;
        $correctAnswers[] = $correctAnswer;
    }
    runGame($gameRule, $questions, $correctAnswers);
}
