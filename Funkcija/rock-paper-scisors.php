<?php
$guess = strtolower(readline( "Rock, Paper, Scissors, Lizard or Spock?"));
$elements = array(
    'rock' => 1,
    'paper' => 2,
    'scissors' => 3,
    'lizard' => 4,
    'spock' => 5
);
$opponentElement = rand(1,5);
$yourElement = $elements[$guess];

$play = function ($yourElement, $opponentElement) use ($elements) {
    $matches = array(
        1 => array(3, 4), // rock beats scissors and lizard
        2 => array(1, 5), // paper beats rock and spock
        3 => array(2, 4), // scissors beat paper and lizard
        4 => array(2, 5), // lizard beats paper and spock
        5 => array(1, 3)  //spock beats rock and scissors
    );


    if ($yourElement === $opponentElement) {
        echo "It's a draw!";
    } elseif (in_array($yourElement, $matches[$opponentElement])) {
        echo "You win!";
    } else {
       echo "Sorry, you don't have a game!";
    }
    return in_array($yourElement, $matches[$opponentElement]);
};

$gameResult = $play($yourElement, $opponentElement);
echo $gameResult;
?>