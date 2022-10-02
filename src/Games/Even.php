<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'Answer "yes" if the number is even, otherwise answer "no".';

function RunCheckEven()
{
    $even = 2;
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $question = rand(1, 100);
        $question % $even === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";

        $questions[] = $question;
        $correctAnswers[] = $correctAnswer;
    }
    runGame(GAME_RULE, $questions, $correctAnswers);
}
