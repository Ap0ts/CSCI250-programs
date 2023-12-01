<?php
$pdo = new PDO('mysql:host=localhost;port=8889;dbname=VotingMachine',
    'root', 'root');
$stmt = $pdo->query("SELECT ssn, candidate");
echo '<table border="1">'."\n";
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo($row['ssn']);
    echo("</td><td>");
    echo($row['candidate']);
    echo("</td><td>");
}
echo "</table>\n";?>