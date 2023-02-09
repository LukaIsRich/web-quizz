<?php

if($_SERVER['REQUEST_METHOD'] === 'POST')
{                                           //if it's a POST request, this part executes
    if(!isset($_POST['comm'])) { //comm variable check

    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET') 
{                                           //if it's a GET request, this part executes
    if(!isset($_GET['comm'])) { //comm variable check
        die('Error');
    }

    if($_GET['comm'] === 'get-topics') {
        APIout('', true, getTopics());
    }
}

?>

