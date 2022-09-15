<?php

namespace BrainEven\Even;

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\playerLosing;

function checkEven()
{
    
    $name = getGreeting();
    
    $correctAnswerCount = 0;

    while($correctAnswerCount < 3) {
        
        $randomNumber = rand(1, 100);

        line("Question: " . $randomNumber);
        $userResponse = prompt("You answer");

        $randomNumber % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer= "no";
        if ($correctAnswer=== $userResponse) {
            line("Correct!");
            $correctAnswerCount++;
        } else {
            line("'{$userResponse}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            playerLosing($name);
            break;
        }
    } 

    if ($correctAnswerCount === 3) {
        playerWinner($name);
    }

} 