<?php

namespace BrainGames\Src\Games\Even;

use function BrainGames\Engine\getGreeting;


function checkEvenRun()
{
    $correctAnswer = "";
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
    
    function getQuestion(&$correctAnswer) {
    $question = rand(1, 100);
    $question % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
    return $question;
    }

    getGreeting($gameRule, $correctAnswer);

}
