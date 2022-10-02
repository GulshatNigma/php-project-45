<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'Answer "yes" if number even otherwise answer "no".';

function checkEven(int $question): string
{
    $even = 2;
    $question % $even === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
    return $correctAnswer;
}


function launchTheGame()
{
    $gameData = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $question = rand(1, 100);
        $correctAnswer = checkEven($question);

        $gameData[] = [$question, $correctAnswer];
    }
    runGame(GAME_RULE, $gameData);
}
