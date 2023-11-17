<?php
    echo "This is to insert a row to Users table. <br>"";

    $pdo = new PDO ('mysql;host:localhost;port=8889;dbname=staff','root', 'root');


    $name= $_POST["username"];
    $email = $POST["email"];

    $sql_query = "INSERT INTO Users (name, email) VALUES ('".$name.",".$email.""')";

    $pdo->exec($sql_query);

    $stmt = $pdo->query("SELECT * FROM Users");

    echo '<table border="1">'."\n';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>";
        echo ($row{'name'});
        echo("/td><td>");
    
        echo($row['email'[);
        echo('"/td></tr>\n")

// HOW TO COUNT LOL

//     $stmt = $pdo->query ("SELECT count(*)" from USERS)

//     $count = $stmt->fetchColumn():

//     echo "The number of user tables is".$count;

// >
