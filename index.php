<?php

/* Connecting to the database. */
$connect = mysqli_connect(
    'db',
    'root',
    'password',
    'php_database'
);

/* Checking if the connection is successful. If it is not, it will print out the error. */
if (!$connect) {
    die('Could not connect: ' . mysqli_error($connect));
}
echo 'Connected successfully <br>';

/* Selecting the database. */
$table_name = 'fruit';

/* Selecting all the data from the table. */
$query = "SELECT * FROM $table_name";

/* Executing the query. */
$result = mysqli_query($connect, $query);

/* Checking if the query is successful. If it is not, it will print out the error. */
if (!$result) {
    die('Could not query:' . mysqli_error($connect));
}

/* Printing out the table name and then printing out the data from the table. */
echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($result))
{
    echo "<p>".$i['name']."</p>";
    echo "<p>".$i['color']."</p>";
    echo "<hr>";
}