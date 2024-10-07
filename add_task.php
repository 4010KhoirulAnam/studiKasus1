<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    $sql = "INSERT INTO todos (task, start_date, end_date) VALUES ('$task', '$startDate', '$endDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Tugas berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
