<?php


include '../connection.php';
// include 'connection.php';  

if (isset($_GET['id'])) {
    $donor_id = $_GET['id'];

    
    $query = "SELECT * FROM login WHERE id = $donor_id";
    $result = mysqli_query($connection, $query);
    $donor = mysqli_fetch_assoc($result);


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Details</title>
</head>
<body>

    <h2>Donor Details</h2>

    <?php
    if ($donor) {
        echo '<p><strong>Donor ID:</strong> ' . $donor['id'] . '</p>';
        echo '<p><strong>Name:</strong> ' . $donor['name'] . '</p>';
        echo '<p><strong>Email:</strong> ' . $donor['email'] . '</p>';
        // Display other donor details as needed
    } else {
        echo '<p>Donor not found</p>';
    }
    ?>

</body>
</html>