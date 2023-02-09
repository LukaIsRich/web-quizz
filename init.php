<?php
session_name('GameStatus');
session_start();

define('DB_PATH', 'data/database.db');

require('game.php');
require('events.php');

?>