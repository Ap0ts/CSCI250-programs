<?php
    echo "This is to insert a row to Users table. <br>"";

    $pdo = new PDO ('mysql;host:localhost;port=8889;dbname=staff','root', 'root');

    $stmt = $pdo->query ("SELECT count(*)" from USERS)

    $count = $stmt->fetchColumn():

    echo "The number of user tables is".$count;

>
