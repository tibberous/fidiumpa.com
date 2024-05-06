<?php

    

if($_SERVER['DOCUMENT_ROOT'] === "/home/u678805949/domains/fidiumpa.com/public_html"){
        // use database settings for Hostinger
        $password = file_get_contents("hostinger.key");

        $mysqli = new mysqli("localhost", $user="u678805949_fidiumpa", "{$password}50", "u678805949_fidiumpa");


        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } else {
        //echo "Connected!";
        //die();
    }

} else {
        $password = file_get_contents("localhost.key");

        $mysqli = new mysqli("156.67.73.101:3306", $user="u678805949_fidiumpa", "{$password}50", "u678805949_fidiumpa");

        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }

        print_r($mysqli);

        echo "Connected";
        die();
    }


