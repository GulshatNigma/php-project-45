<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }

    for ($index = 2; $index <= sqrt($number); $index++) {
        if ($number % $index === 0) {
            return false;
        }
    }
    return true;
}


function startGame()
{
    $gameData = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $number = rand(1, 100);

        $question = $number;
        $correctAnswer = isPrime($number) ? "yes" : "no";

        $gameData[] = [$question, $correctAnswer];
    }
    runGame(GAME_RULE, $gameData);
}
