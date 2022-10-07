<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'Answer "yes" if number even otherwise answer "no".';

function isEven(int $question): bool
{
    return $question % 2 === 0;
}


function startGame()
{
    $gameData = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? "yes" : "no";

        $gameData[] = [$question, $correctAnswer];
    }
    runGame(GAME_RULE, $gameData);
}
