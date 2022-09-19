<?php

namespace BrainEven\Even;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\question;
use function BrainGames\Engine\check;

function checkEven()
{
    $gameConditions = 'Answer "yes" if the number is even, otherwise answer "no".';
    $name = getGreeting($gameConditions);

    $correctAnswerCount = 0;

    while ($correctAnswerCount < 3) {
        $question = rand(1, 100);
        $userResponse = question($question);

        $question % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
        check($correctAnswer, $userResponse, $correctAnswerCount);
    }
        playerWinner($correctAnswerCount);
}
