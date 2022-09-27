<?php

namespace BrainGames\Src\Games\Even;

use function BrainGames\Engine\getGreeting;

function checkEvenRun()
{

    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $even = 2;

    for ($i = 0; $i < 3; $i++) {
        $question = rand(1, 100);
        $question % $even === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";

        $questionArray[] = $question;
        $correctAnswerArray[] = $correctAnswer;
    }
    getGreeting($gameRule, $questionArray, $correctAnswerArray);
}
