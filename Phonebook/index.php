<?php
include "phonebookdb.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $personal_info = $_POST['personal_info'];

    // Additional validation for phone number (format xxx-xxx-xxxx)
    if (!preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone_number)) {
        echo "Error: Invalid phone number format. Please use the format xxx-xxx-xxxx.";
        exit;
    }

    // Check for duplicate phone numbers
    $check_duplicate_sql = "SELECT * FROM contacts WHERE phone_number = '$phone_number'";
    $duplicate_result = $conn->query($check_duplicate_sql);

    if ($duplicate_result->num_rows > 0) {
        echo "Error: Duplicate phone number. This contact already exists.";
        exit;
    }

    // Insert the contact into the database
    $insert_sql = "INSERT INTO contacts (name, phone_number, address, personal_info) 
                   VALUES ('$name', '$phone_number', '$address', '$personal_info')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Contact added successfully.";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}

// Handle contact deletion
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && $_GET['action'] == "delete" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_sql = "DELETE FROM contacts WHERE id = $id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "Contact deleted successfully.";
    } else {
        echo "Error deleting contact: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
</head>
<body>
    <h1>Welcome to your Virtual Phonebook!</h1>

    <p><a href="index.php?action=view">View Contacts</a></p>
    <p><a href="index.php?action=search">Search Contacts</a></p>

    <?php
    // Display the appropriate section based on the action parameter
    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        if ($action == "view") {
            include "view_contacts.php";
        } elseif ($action == "search") {
            include "search_contacts.php";
        }
    }
    ?>

    <h2>Add Contact</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" pattern="\d{3}-\d{3}-\d{4}" title="Please use the format xxx-xxx-xxxx" required><br>

        <label for="address">Address:</label>
        <textarea name="address"></textarea><br>

        <label for="personal_info">Personal Information:</label>
        <textarea name="personal_info"></textarea><br>

        <input type="submit" value="Add Contact">
    </form>

    <h2>Delete Contact</h2>
    <form action="" method="get">
        <label for="id">Contact ID:</label>
        <input type="text" name="id" required>
        <input type="hidden" name="action" value="delete">
        <input type="submit" value="Delete Contact">
    </form>
</body>
</html>
