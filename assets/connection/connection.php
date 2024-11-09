<?php
    //* connection parameters.
    $servername = "localhost"; // Name of your server.
    $username = "root"; // Database user.
    $password = ""; // Database password.
    $dbname = "users_example"; // Database name.

    try {
        //! Create a new PDO connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Configure PDO error mode for exceptions.
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // If a connection error occurs, display message.
        die("Connection error: " . $e->getMessage());
    }
?>