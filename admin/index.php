<?php

$conn = new PDO("mysql:host=localhost;dbname=event_kiev", "event_kiev", "HgZUhlZinyAy2VucOLuNY7rdkJrJh17e");
$sql = "SELECT * FROM users ORDER BY email ASC;";
$res = $conn->query($sql);

while($row = $res->fetch(PDO::FETCH_ASSOC)){
    $users[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="admin-page">
    <div class="users">
        <div class="users__row">
            <div class="users__cell">ID</div>
            <div class="users__cell">Name</div>
            <div class="users__cell">Email</div>
            <div class="users__cell">Status</div>
        </div>

        <?php foreach($users as $user) { ?>
        <div class="users__row<?= $user['status'] ? ' successful' : '' ?>">
            <div class="users__cell"><?= $user['id'] ?></div>
            <div class="users__cell"><?= $user['name'] ?></div>
            <div class="users__cell"><?= $user['email'] ?></div>
            <div class="users__cell"><?= $user['status'] ?></div>
        </div>
        <?php } ?>
    </div>
    <!-- <pre>
    <?php //print_r($users); ?>
    </pre> -->
</body>
</html>