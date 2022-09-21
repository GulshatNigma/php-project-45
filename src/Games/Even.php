<?php

namespace BrainGames\Even;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\isPlayerWinner;
use function BrainGames\Engine\getUserAnswer;
use function BrainGames\Engine\checkUserAnswer;

function checkEvenRun()
{
    $correctAnswer = "";
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
    getGreeting($gameRule);

    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $question = rand(1, 100);
        $userAnser = getUserAnswer($question);

        $question % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
        checkUserAnswer($correctAnswer, $userAnser, $correctAnswerCount);
    }
    isPlayerWinner($correctAnswerCount);
}
