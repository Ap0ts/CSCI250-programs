<h2>Search Contacts</h2>

<form action="" method="get">
    <label for="search">Search:</label>
    <input type="text" name="search" required>
    <input type="submit" value="Search">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $search = $_GET['search'];

    $sql = "SELECT * FROM contacts WHERE name LIKE '%$search%' OR phone_number LIKE '%$search%'";
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
    <?php
}
?>
