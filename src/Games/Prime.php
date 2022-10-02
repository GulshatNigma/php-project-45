<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function runPrime()
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $correctAnswer = "no";
        $number = rand(1, 100);
        $question = $number;

        if ($number !== 1) {
            $correctAnswer = "yes";
        }
        for ($index = 2; $index < $number; $index++) {
            if ($number % $index === 0) {
                $correctAnswer = "no";
            }
        }
        $questions[] = $question;
        $correctAnswers[] = $correctAnswer;
    }
    runGame(GAME_RULE, $questions, $correctAnswers);
}
