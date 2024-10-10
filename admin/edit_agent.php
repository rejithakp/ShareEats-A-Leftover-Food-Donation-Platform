<?php


include '../connection.php';
// include 'connection.php';  

if (isset($_GET['Did'])) {
    $agent_id = $_GET['Did'];

    
    $query = "SELECT * FROM delivery_persons WHERE Did = $agent_id";
    $result = mysqli_query($connection, $query);
    $agent = mysqli_fetch_assoc($result);


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Details</title>
</head>
<body>

    <h2>Agent Details</h2>

    <?php
    if ($agent) {
        echo '<p><strong>Donor ID:</strong> ' . $agent['Did'] . '</p>';
        echo '<p><strong>Name:</strong> ' . $agent['name'] . '</p>';
        echo '<p><strong>Email:</strong> ' . $agent['email'] . '</p>';
        // Display other donor details as needed
    } else {
        echo '<p>Agent not found</p>';
    }
    ?>

</body>
</html>