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
   
   if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {
       $firstname = $_POST["firstname"];
       $lastname = $_POST["lastname"];
   } else {
       $firstname = "";
       $lastname = "";
   }
   
     if ($is_submitted)
     {
         $fout = fopen("recordvotes.txt", "a");
         fwrite($fout, "$ssn voted for $vote.\r\n");
         fclose($fout);
     }
      

   $pdo = new PDO('mysql:host=localhost;port=8889;dbname=demo','root','root');

   $sql_query = "INSERT INTO myvotes (first_name, last_name) VALUES (".$firstname.", '".$lastname."')";

   $pdo->exec($sql_query);

   ?>