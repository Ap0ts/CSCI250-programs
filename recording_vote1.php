<html>
<body>

<h2>Thanks for voting chica!!</h2>

<?php
    $isvalid = true; 
    if (! isset($_POST["ssn"])) {
        $isvalid = false;
    }
    if (! isset($_POST["vote"])) {
        $isvalid = false;
    }


    // $fout = fopen("vote_record.txt", "a");
    // fwrite($fout, "$id voted for $vote.\n");
    // fclose($fout);

    echo "<h2>";
    echo $isvalid ? "valid": "not valid";
    echo "</h2>";

?>


</body>
</html>