<?php

function getTopics() {
    $db = new SQLite3(DB_PATH);
    $query = 'SELECT * FROM topic';

    $results = $db->query($query);
    $end = array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        array_push($end, $row);
    }

    return $end;
}

function APIout($message, $success, $data = null) 
{
    header('Content-type: application/json');
    die(json_encode(array("message"=>$message, "success"=>$success, "data"=>$data)));
}

?>