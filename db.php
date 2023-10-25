<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function debug($data) {
    echo '<pre>' . print_r($data, true) . '</pre>';
}

try {
    $conn = new PDO("mysql:host=localhost;dbname=event_kiev", "event_kiev", "HgZUhlZinyAy2VucOLuNY7rdkJrJh17e");
    $sql = "SELECT * FROM users;";
    $res = $conn->query($sql);

    while($row = $res->fetch(PDO::FETCH_ASSOC)){
        $users[] = $row;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = trim($_POST['email']);
        $regex = '/\S+@\S+\.\S+/';

        preg_match($regex, $email, $result);
        
        if ($result) {
            // echo $email;

            foreach($users as $user) {
                if ($user['email'] === $email) {
                    $sql = "UPDATE users SET status = '1' WHERE email = '$email'";
                    $res = $conn->query($sql);

                    echo 'success';
                    return;
                }
            }

            echo 'failure';
        }
    }
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}