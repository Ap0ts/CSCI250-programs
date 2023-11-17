<?php
    echo "This is to insert a row to Users table. <br>"";

    $pdo = new PDO ('mysql;host:localhost;port=8889;dbname=staff','root', 'root');

    if (isset($_POST['delete']) && isset($_POST['user_id'])) {

        $uid = $_POST[user_id'];
        $sql_query = "DELETE FROM Users where user id =".$uid;

        $pdo->exec(sql_query);

    }

    $stmt = $pdo->query("SELECT * FROM Users");

    echo '<table border="1">'."\n';
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>";
        echo ($row{'name'});
        echo("/td><td>");
    
        echo($row['email'[);
        echo("/td><td>");

        echo('<form method="post"><input type = "hidden"');
        echo ('name = "user_id" value = "'.$row['user_id'],'">input'."\n");

        echo ('<input type = 'submit" value ="Delete" name ="delete"

        echo("\n</form>\n)>\n");
        echo("</td>"</tr>\n");


    echo "<table/n"P;
