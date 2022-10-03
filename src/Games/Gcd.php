<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function findGcd(int $randomNumber1, int $randomNumber2): string
{
    while ($randomNumber1 !== $randomNumber2) {
        if ($randomNumber1 > $randomNumber2) {
            $randomNumber1 -= $randomNumber2;
        } elseif ($randomNumber1 < $randomNumber2) {
            $randomNumber2 -= $randomNumber1;
        }
    }
    $correctAnswer = (string) $randomNumber1;
    return (string) $correctAnswer;
}

function startGame()
{
    $gameData = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);

        $question = "{$randomNumber1} {$randomNumber2}";
        $correctAnswer = findGcd($randomNumber1, $randomNumber2);

        $gameData[] = [$question, $correctAnswer];
    }
    runGame(GAME_RULE, $gameData);
}
