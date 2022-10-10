<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'Find the greatest common divisor of given numbers.';

function getGcd(int $number1, int $number2): string
{
    while ($number1 !== $number2) {
        if ($number1 > $number2) {
            $number1 -= $number2;
        } elseif ($number1 < $number2) {
            $number2 -= $number1;
        }
    }
    return $number1;
}

function startGame()
{
    $gameData = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $number1 = rand(1, 25);
        $number2 = rand(1, 10);

        $question = "{$number1} {$number2}";
        $correctAnswer = getGcd($number1, $number2);

        $gameData[] = [$question, $correctAnswer];
    }
    runGame(GAME_RULE, $gameData);
}
