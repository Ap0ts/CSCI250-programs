<html>
<body>
    <h1>THIS IS AIRAS DEMO</h1>

    <form action = "airademodb.php" method = post >

    <p>
       First Name: <input type="text" name="firstname"><br>
        Last Name: <input type="text" name="lastname"><br>
    
    </p>

    <p><h2>Descibe Aira:</h2></p>
    <input type = "radio" name = "radiovote" value = "Hot" /><label>Hot</label> <br>
    <input type = "radio" name = "radiovote" value = "Super Hot" /><label>Super Hot</label> <br>
    <input type = "radio" name = "radiovote" value = "Breathtakingly Sexy" /><label>Breathtakingly Sexy</label> <br>
    <input type = "radio" name = "radiovote" value = "Sexingly Gorgeous" /><label>Sexingly Gorgeous</label> <br>
    <br>
    <label for="state">Select your State:</label>    
    <br>
    <select name="State" id="state">
        <option value = "">Choose:</option>
        <option value = "nj">New Jersey</option>
        <option value = "ny">New York</option>
        <option value = "tx">Texas</option>

    </select>

    <p><input type = "submit" value = "Submit Vote" /></p>

    <?php

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
      $fout = fopen("recordresults.txt", "a");
      fwrite($fout, "$ssn voted for $vote.\r\n");
      fclose($fout);
  }


?>

</body>

</html>