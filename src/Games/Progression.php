<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'What number is missing in the progression?';

function getProgression(): array
{
    $length = 10;
    $startNumber = rand(1, 20);
    $progressionStep = rand(1, 10);
    $progression = [];

    for ($i = 0; $i <= $length; $i++) {
        $progression[] = $startNumber;
        $startNumber += $progressionStep;
    }
    return $progression;
}

function startGame()
{
    $gameData = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $progression = getProgression();

        $randomIndex = array_rand($progression);
        $correctAnswer = $progression[$randomIndex];
        $progression[$randomIndex] = "..";
        $question = implode(" ", $progression);

        $gameData[] = [$question, $correctAnswer];
    }
    runGame(GAME_RULE, $gameData);
}
