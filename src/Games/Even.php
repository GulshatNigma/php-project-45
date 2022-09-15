<?php

namespace BrainEven\Even;

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\winner;
use function BrainGames\Engine\loser;

function checkEven()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $correctAnswerCount = 0;

    while($correctAnswerCount < 3) {
        
        $randomNumber = rand(1, 100);

        line("Question: " . $randomNumber);
        $userResponse = prompt("You answer");

        $randomNumber % 2 === 0 ? $even = "yes" : $even= "no";
        if ($even === $userResponse) {
            line("Correct!");
            $correctAnswerCount++;
        } else {
            line("'{$userResponse}' is wrong answer ;(. Correct answer was '{$even}'");
            line("Let's try again, %s", $name);
            break;
        }
    } 

    if ($correctAnswerCount === 3) {
        line("Congratulations, %s", $name);
    }

} 