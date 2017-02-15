<?php
    class RPSGame
    {
        function playGame($input1,$input2)
        {
            $input1 = strtolower($input1);
            $input2 = strtolower($input2);
            if ($input1[0] == "r" && $input2[0] == "s")
            {
                return "Player 1";
            }
            elseif ($input1[0] == "p" && $input2[0] == "r")
            {
                return "Player 1";
            }
            elseif ($input1[0] == "s" && $input2[0] == "p")
            {
                return "Player 1";
            }
            elseif ($input1[0] == "s" && $input2[0] == "r")
            {
                return "Player 2";
            }
            elseif ($input1[0] == "r" && $input2[0] == "p")
            {
                return "Player 2";
            }
            elseif ($input1[0] == "p" && $input2[0] == "s")
            {
                return "Player 2";
            }
            elseif ($input1[0] == $input2[0])
            {
                return "Draw";
            } else {
                return "No one because you did not enter a valid play";
            }

        }
    }



?>
