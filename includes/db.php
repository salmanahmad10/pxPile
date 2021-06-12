<?php

    const   url = "localhost",
            db_username = "root",
            db_pass = "",
            db = "px_pile";

    function db_create_connection(){
        $conn = new mysqli(url, db_username, db_pass, db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }