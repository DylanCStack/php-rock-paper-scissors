<?php
    require_once "src/RPSGame.php";

    class RPSGameTest extends PHPUnit_Framework_TestCase
    {
        function test_rock_scissors()
        {
            //Arrange
            $test_RPSGame = new RPSGame;
            $first_input = "scissors";
            $second_input ="rock";

            //Act
            $result = $test_RPSGame->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_paper_rock()
        {
            //Arrange
            $test_RPSGame = new RPSGame;
            $first_input = "paper";
            $second_input ="rock";

            //Act
            $result = $test_RPSGame->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_scissors_paper()
        {
            //Arrange
            $test_RPSGame = new RPSGame;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test_RPSGame->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_draw()
        {
            //Arrange
            $test_RPSGame = new RPSGame;
            $first_input = "scissors";
            $second_input = "scissors";

            //Act
            $result = $test_RPSGame->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }

    }
?>
