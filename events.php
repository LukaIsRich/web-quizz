<?php

if($_SERVER['REQUEST_METHOD'] === 'POST')
{                                           //if it's a POST request, this part executes
    if(!isset($_POST['comm'])) die('Error'); //comm variable check

    if($_GET['comm'] === 'start-game')
    {
        $result = startGame($_GET);
        APIout($result[0], $result[1], $result[2]);
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET') 
{                                           //if it's a GET request, this part executes
    if(!isset($_GET['comm'])) die('Error'); //comm variable check
        
    if($_GET['comm'] === 'get-topics')
    {
        APIout('', true, getTopics());
    }


}

?>

