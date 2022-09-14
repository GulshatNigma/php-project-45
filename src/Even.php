<?php

namespace BrainEven\Even;

use function cli\line;
use function cli\prompt;

function getGreeting()
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function checkEven()
{
    $correctAnswerCount = 0;


    while($correctAnswerCount < 3) {
        
        $randomNumber = rand(1, 100);
        $numberEven = $randomNumber % 2 === 0;

        line("Question: " . $randomNumber);
        $userResponse = prompt("You answer");
        line($userResponse);

        $randomNumber % 2 === 0 ? $eee = "yes" : $eee = "no";
        if ($eee === $userResponse) {
            line("Correct!");
            $correctAnswerCount++;
        } else {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, Bill!");
            break;
        }
    } 

    line("Congratulations, Bill!");


} 
