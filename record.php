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

<h2>Thank you for voting chica.</h2>

<p>You voted for <?php echo $vote ?>.</p>

