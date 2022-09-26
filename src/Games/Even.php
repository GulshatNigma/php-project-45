<?php

namespace BrainGames\Src\Games\Even;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\isPlayerWinner;
use function BrainGames\Engine\getUserAnswer;
use function BrainGames\Engine\checkUserAnswer;

function checkEvenRun()
{
    $correctAnswer = "";
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
        $question = rand(1, 100);
        $question % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
        getGreeting($gameRule, $correctAnswer, $question);
}
