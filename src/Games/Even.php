<?php

namespace BrainGames\Src\Games\Even;

use function BrainGames\Engine\getGreeting;


function checkEvenRun($result = true)
{
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
    

        $question = rand(1, 100);
        $question % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
        $result = getGreeting($gameRule, $correctAnswer, $question);
}
