<?php

   echo "Thanks for voting!";

   if (isset($_POST["radiovote"]))
   {
       $is_submitted = 1;
   }
   else
   {
       $is_submitted = 0;
   }

   if (isset($_POST["radiovote"]))
   {
       $vote = $_POST["radiovote"];
   }
   else
   {
       $vote = "";
   }

   if (isset($_POST["ssn"]))
   {
       $ssn = intval($_POST["ssn"]);
   }
   else
   {
       $ssn = "999999999";
   }

   $pdo = new PDO('mysql:host=localhost;port=8889;dbname=VotingMachine','root','root');

   $sql_query = "INSERT INTO Votes (ssn, candidate) VALUES (".$ssn.", '".$vote."')";

   $pdo->exec($sql_query);

   ?>