<?php
// establishing a connection with database
$db = new mysqli(
    "eu-cdbr-azure-west-d.cloudapp.net",
    "b68215f8e33263",
    "1f8b4c10",
    "cmm007al-1003750"
);

// connection error check
if ($db->connect_errno) {
    die('Connectfailed['.$db->connect_error.']');
}

?>