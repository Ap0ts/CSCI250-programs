<html>


<body>

    <h2>Voting Machine Example for the Animal Presidents</h2>


    <form action = "recordingvotedb.php" method = "post" >

    <p>
        Enter your SSN: <br>

        <input type = "text" name = "ssn" size = "15" />

    </p>

    <p> Vote for one candidate: </p>
    <input type = "radio" name = "radiovote" value = "Donald Duck" /><label>Donald Duck</label> <br>
    <input type = "radio" name = "radiovote" value = "Mikey Mouse" /><label>Mikey Mouse</label> <br>
    <input type = "radio" name = "radiovote" value = "Tweeky Bird" /><label>Tweeky Bird</label> <br>


    <label for="state">Select your state:</label>

    <select name="State" id="state">
            <option value = "">Choose your state:</option>
            <option value = "nj">New Jersey</option>
            <option value = "ny">New York</option>
            <option value = "tx">Texas</option>

        </select>

        <p><input type = "submit" value = "Submit Vote" /></p>

    </form>

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

if (isset($_POST["ssn"]))
{
    $ssn = $_POST["ssn"];
}
else
{
    $ssn = "999999999";
}


  if ($is_submitted)
  {
      $fout = fopen("recordvotes.txt", "a");
      fwrite($fout, "$ssn voted for $vote.\r\n");
      fclose($fout);
  }
?>

  

    </body>
</html>


 