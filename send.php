<?php
$db_host = 'YOUR RDS ENDPOINT';#  CHANE THIS   #
$db_user = 'YOUR DB USERNAME';#  CHANE THIS   #
$db_password = 'YOUR DB PASSWORD';#  CHANE THIS   #
$db_name = 'YOUR DATABASE NAME';#  CHANE THIS   #

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $team = $_POST['team'];

    $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
    if ($connection->connect_error) {
        die("Database connection failed: " . $connection->connect_error);
    }
                        #  CHANE THIS   #
    $sql = "INSERT INTO YOUR_COLUMN_NAME (name, age, team) VALUES ('$name', '$age', '$team')";
    if ($connection->query($sql) === TRUE) {
        echo "Survey completed successfully.";
    } else {
        echo "An error occurred: " . $connection->error;
    }

    $connection->close();
}
?>

