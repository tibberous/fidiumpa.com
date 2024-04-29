<?php

    print_r($_SERVER);
    die();

    $mysqli = new mysqli("localhost:3306", $user="root", $pass="s3cr3tDatabase", "test");

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    /*$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
    $row = $result->fetch_assoc();
e   cho htmlentities($row['_message']);*/
