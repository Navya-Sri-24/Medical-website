<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Check if the user exists in the database
    $query = "SELECT fname FROM signup WHERE email = '$email'";
    $result = mysqli_query($con, $query);

    // Check for query execution error
    if (!$result) {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
        exit();
    }

    // Check if the user exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['fname']; // Use fname as the name
    } else {
        echo "User with this email does not exist. Please sign up.";
        exit();
    }
    $insert_query = "INSERT INTO appointments (name, email, date, time) VALUES ('$name', '$email', '$date', '$time')";
    if (mysqli_query($con, $insert_query)) {
        echo "Appointment booked successfully.";
    } else {
        echo "Error: " . $insert_query . "<br>" . mysqli_error($con);
    }
}
?>
