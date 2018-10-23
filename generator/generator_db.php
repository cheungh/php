<?php

$conn = new PDO('mysql:host=127.0.0.1;dbname=django', 'user', 'password');

/**
 * db generator example
 */
function db_generator() {
    global $conn;
    $stmt = $conn->prepare('SELECT * from polls_choice');
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        yield($row);

    }
}
// iteriate generator
foreach(db_generator() as $obj) {
    print_r($obj);
}
