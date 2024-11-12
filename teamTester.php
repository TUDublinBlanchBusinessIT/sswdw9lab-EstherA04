<?php
// Enable error reporting to help with debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the Team class file
require_once("Team.php");

// Create a new team instance
$myTeam = new Team("Tigers");

// Test the finalScore method with a 2-2 draw
$myTeam->finalScore(2, 2);

echo "That worked\n";

// Output the internal state of the team object to verify correctness
echo "Team Name: " . $myTeam->getTeamName() . "\n";
echo "Total Points: " . $myTeam->getTotalPoints() . "\n"; // Should be 1 point for a draw
echo "Total Goals: " . $myTeam->getTotalGoals() . "\n"; // Should be 2 goals scored
echo "Total Games: " . $myTeam->getTotalGames() . "\n"; // Should be 1 game played

?>
