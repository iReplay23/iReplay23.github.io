<?php
$servername = "localhost";
$username = "id18958378_db_get";
$password = "Parola12@";
$dbname = "id18958378_db_get";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from a specific column
$sql = "SELECT * FROM db_calls";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch data from the result set
    while ($row = $result->fetch_assoc()) {
        // Access the value of the "your_column" column for each row
        $columnValue = $row['callStatus'];
        echo "". $columnValue ."<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>