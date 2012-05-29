<?php
echo 'Hello world.';
$config = require 'config/local.config.php';

echo '<br/><br/>';
echo 'db_master host: ' . $config['db_master']['host'] . '<br>';


