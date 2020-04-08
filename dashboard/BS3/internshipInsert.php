<?php
/**
 * CS 4342 Database Management
 * @author Jesus Maximino Hernandez
 * @since 4/8/20
 * @version 1.0
 * Description: The purpose of this file is to serve as a function to add internships into the sql table
 */

session_start();
$host = "ilinkserver.cs.utep.edu";
$db = 's20pm_team1';   # enter your team database here.

$username = "iavigliante";  # enter your username here.
$password = "123123123";  # enter your password here.

/**
 * Making the connection to the database.
 * Parameters - host, username, password, team database.
 */
$conn = new mysqli($host, $username, $password, $db);

$sql = "INSERT INTO internships (u_id, i_company, i_position, i_date_range)
VALUES ('8675309', 'Amazon', 'Future Engineer', 'May 2069-June 4200')";

if ($conn->query($sql) === TRUE) {
    echo "New record CREATED successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


