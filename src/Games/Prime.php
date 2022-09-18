<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\playerLosing;
use function BrainGames\Engine\question;
use function BrainGames\Engine\correctAnswer;

function primeRun()
{
    $gameConditions = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $name = getGreeting($gameConditions); 
    
    $correctAnswerCount = 0;
    
    while ($correctAnswerCount < 3) {
        $number = rand(1, 100);
        $question = $number;
        $userResponse = question($question); 

        $correctAnswer = "no";

        if ($number !== 1) {
            $correctAnswer = "yes";
            for ($i = 2; $i < $number; $i++) {
                if ($number % $i === 0) {
                    $correctAnswer = "no";
                }
            }
        }
        
    

        $correctAnswer == $userResponse ? correctAnswer($correctAnswerCount) : playerLosing($name, $userResponse, $correctAnswer);
    }    
    playerWinner($name, $correctAnswerCount);
}


