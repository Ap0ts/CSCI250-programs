<?php

$ssn = $_POST["ssn"];

$pdo = new PDO('mysql:host=localhost;port=8889;dbname=VotingMachine','root','root');

// ON QUERY: SELECT candidate FROM 'Votes' WHERE ssn = 273613656

$sql_query = "select * from Votes WHERE ssn = ".$ssn;

$stmt = $pdo->query($sql_query);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row) {

    echo '<table border=1"1">'."\n";

    do {

        echo "<tr><td>";
        echo($row['ssn']);
        echo ("</td><td>");
    
        echo($row['candidate']);
        echo("</td></tr>\n");

} while ($row = $stmt->fetch(PDO::FETCH_ASSOC));

    echo"</table>\n";

else {

    echo ("Your ssn" .$ssn. "does not exist in the voting record.");

}


?>