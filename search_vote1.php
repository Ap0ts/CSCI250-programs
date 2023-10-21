<?php

$ssn = $_POST["ssn"];

$pdo = new PDO ('mysql;host:localhost;port=8889;dbname=Voting','root', 'root');

// ON QUERY: SELECT candidate FROM 'Votes' WHERE ssn = 273613656

$sql_query = "SELECT * FROM voting WHERE ssn = :ssn";

$stmt = $pdo->query($sql_query);

$result = $pdo->query($sql_query)->fetch(PDO::FETCH_ASSOC);

?>