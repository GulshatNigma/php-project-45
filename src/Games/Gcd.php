<?php

namespace BrainEven\Gcd;

use function BrainGames\Engine\getGreeting;
use function BrainGames\Engine\playerWinner;
use function BrainGames\Engine\playerLosing;
use function BrainGames\Engine\question;
use function BrainGames\Engine\correctAnswer;

function gcd()
{
    $gameConditions = "Find the greatest common divisor of given numbers.";
    $name = getGreeting($gameConditions);

    $randomNumber1 = rand(1, 25);
    $randomNumber2 = rand(1, 10);
    $question = "{$randomNumber1} {$randomNumber2}";
    $userResponse = question($question); 





}