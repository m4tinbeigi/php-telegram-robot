<?php

use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'database_name',
    'server' => 'localhost',
    'username' => 'username',
    'password' => 'password'
]);