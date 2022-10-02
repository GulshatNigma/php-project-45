<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function findPrime(int $number)
{
    $correctAnswer = "yes";

    if ($number < 2) {
        return $correctAnswer = "no";
    }

    for ($index = 2; $index <= sqrt($number); $index++) {
        if ($number % $index === 0) {
            return $correctAnswer = "no";
        }
    }
    return $correctAnswer;
}


function launchTheGame()
{
    $gameData = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $number = rand(1, 100);
        
        $question = $number;
        $correctAnswer = findPrime($number);

        $gameData[] = [$question, $correctAnswer];
    }
    runGame(GAME_RULE, $gameData);
}
