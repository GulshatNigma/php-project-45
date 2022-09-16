<?php

namespace BrainEven\Even;

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\playerLosing;
use function BrainGames\Engine\quest;

function checkEven()
{
    
    $name = getGreeting();
    
    $correctAnswerCount = 0;

    while($correctAnswerCount < 3) {
        
        $randomNumber = rand(1, 100);
        $quest = $randomNumber;

        $userResponse = quest($quest);

        $randomNumber % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer= "no";
        if ($correctAnswer=== $userResponse) {
            line("Correct!");
            $correctAnswerCount++;
        } else {
            playerLosing($name, $userResponse);
            break;
        }
    } 

    if ($correctAnswerCount === 3) {
        playerWinner($name);
    }

} 