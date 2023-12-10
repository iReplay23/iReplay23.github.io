<?php

// Database connection parameters
$servername = "sql11.freemysqlhosting.net";
$username = "sql11669179";
$password = "76VlSl9nUd";
$dbname = "sql11669179";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Value to be inserted
$valueToInsert = 1;

// SQL query to insert data into a specific column
$sql = "UPDATE db_calls set `callStatus` = '1';";

// Perform the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Apelul tau a fost trimis dispeceratului de taxiuri.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>
