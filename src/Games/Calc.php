<?php

namespace BrainGames\Games\Calc;

use Exception;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'What is the result of the expression?';

function calculate(int $number1, int $number2, string $mathematicalOperation): string
{
    switch ($mathematicalOperation) {
        case "+":
            return $number1 + $number2;
        case "-":
            return $number1 - $number2;
        case "*":
            return $number1 * $number2;
        default:
            throw new Exception("Unknown mathematical operation '{$mathematicalOperation}'");
    }
}

function startGame()
{
    $gameData = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $number1 = rand(1, 25);
        $number2 = rand(1, 10);
        $operations = ["+", "-", "*"];
        $mathematicalOperation = $operations[array_rand($operations)];

        $question = ("{$$number1} {$mathematicalOperation} {$number2}");
        $correctAnswer = calculate($number1, $number2, $mathematicalOperation);

        $gameData[] = [$question, $correctAnswer];
    }
    runGame(GAME_RULE, $gameData);
}
