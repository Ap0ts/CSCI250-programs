<h2>View Contacts</h2>

<?php
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Personal Information</th>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['address']}</td>
                <td>{$row['personal_info']}</td>
              </tr>";
    }
    ?>
</table>
