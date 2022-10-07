<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const GAME_SCORE = 3;

function runGame(string $gameRule, array $gameData)
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line($gameRule);

    for ($i = 0; $i < GAME_SCORE; $i++) {
        [$question, $correctAnswer] = $gameData[$i];

        line("Question: {$question}");
        $userAnswer = prompt("You answer");

        if ($correctAnswer !== $userAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$name}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
