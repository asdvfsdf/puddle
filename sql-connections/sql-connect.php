<?php
// including the Mysql connection parameters
include("../sql-connections/db-info.inc");

// Use mysqli to connect to the database
$con = new mysqli($host, $dbuser, $dbpass, $dbname);


// Check connection
if ($con->connect_error) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// If connection is successful, you can proceed
echo "Connected successfully to the database: $dbname";

// You can now perform database operations here
// Example query
$sql_connect = "SQL Connect included";

// For Less-24 and other variables
$form_title_in = "Please Login to Continue";
$form_title_ns = "New User";
$feedback_title_ns = "New User";
$form_title_ns = "Less-24";

// For Challenge series--- Randomizing the Table names.
