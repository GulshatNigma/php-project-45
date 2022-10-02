<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\GAME_SCORE;

const GAME_RULE = 'What number is missing in the progression?';

function getProgression()
{
    $progressionLength = 10;
    $progressionNumber = rand(1, 20);
    $progressionDifference = rand(1, 10);
    $progression = [];

    for ($i = 0; $i <= $progressionLength; $i++) {
        $progression[] = $progressionNumber;
        $progressionNumber += $progressionDifference;
    }
    return $progression;
}

function launchTheGame()
{
    $questions = [];
    $correctAnswers = [];

    for ($i = 0; $i < GAME_SCORE; $i++) {
        $progression = getProgression();

        $randomIndex = array_rand($progression);
        $correctAnswer = $progression[$randomIndex];

        $progression[$randomIndex] = "..";

        $question = implode(" ", $progression);

        $questions[] = $question;
        $correctAnswers[] = $correctAnswer;
    }
    runGame(GAME_RULE, $questions, $correctAnswers);
}
