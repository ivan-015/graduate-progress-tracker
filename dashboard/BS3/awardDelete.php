<?php
/**
 * CS 4342 Database Management
 * @author Jesus Maximino Hernandez
 * @since 4/8/20
 * @version 1.0
 * Description: The purpose of this file is to serve as a function to delete awards into the sql table
 */

session_start();
$host = "ilinkserver.cs.utep.edu";
$db = 's20pm_team1';   # enter your team database he

$username = "iavigliante";  # enter your username here.
$password = "123123123";  # enter your password here.

/**
 * Making the connection to the database.
 * Parameters - host, username, password, team database.
 */
$conn = new mysqli($host, $username, $password, $db);

$sql = "DELETE FROM awards WHERE u_id=8675309";

if ($conn->query($sql) === TRUE) {
    echo "New record DELETED successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


