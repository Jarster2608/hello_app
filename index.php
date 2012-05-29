<?php
echo 'Hello world.';
$config = require 'config/local.config.php';

echo '<br/><br/>';
echo 'db_master host: ' . $config['db_master']['host'] . '<br>';
echo 'db_master db_name: ' . $config['db_master']['db_name'] . '<br>';


