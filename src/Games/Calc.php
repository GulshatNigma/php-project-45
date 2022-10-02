<?php

namespace BrainGames\Games\Calc;

use Exception;

use function BrainGames\Engine\runGame;

function calculator(int $randomNumber1, int $randomNumber2, string $mathematicalOperations): string //имя функции - глагол
{
    switch ($mathematicalOperations) {
        case "+":
            $correctAnswer = $randomNumber1 + $randomNumber2;
            break;
        case "-":
            $correctAnswer = $randomNumber1 - $randomNumber2;
            break;
        case "*":
            $correctAnswer = $randomNumber1 * $randomNumber2;
            break;
        default:
            throw new Exception("Error: unknown mathematical operation '{$mathematicalOperations}'");
        }
        return $correctAnswer;
} 

function runCalculator()
{
    $gameRule = "What is the result of the expression?";
    $gameScore = 3;
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < $gameScore; $i++) {
        $randomNumber1 = rand(1, 25);
        $randomNumber2 = rand(1, 10);
        $operations = ["+", "-", "*"];
        $mathematicalOperations = $operations[array_rand($operations)];

        $question = ("{$randomNumber1} {$mathematicalOperations} {$randomNumber2}");
        $correctAnswer = calculator($randomNumber1, $randomNumber2, $mathematicalOperations);
        
        $questions[] = $question;
        $correctAnswers[] = $correctAnswer;
    }
    runGame($gameRule, $questions, $correctAnswers);
}
