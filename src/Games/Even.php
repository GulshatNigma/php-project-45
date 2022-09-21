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
    $name = getGreeting($gameRule);

    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $question = rand(1, 100);
        $userAnswer = getUserAnswer($question);

        $question % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
        if (checkUserAnswer($correctAnswer, $userAnswer, $correctAnswerCount, $name) === false) {
            break;
        }
    }
    isPlayerWinner($correctAnswerCount, $name);
}
