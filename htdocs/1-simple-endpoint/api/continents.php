<?php

// 

require '../database/DatabaseHelper.php';
$config = require '../database/config.php';

$db = new DatabaseHelper($config);

// ❓❓ What do we want to actually return? We can't code unless we have a goal!


$query = <<<QUERY
    SELECT 
        ContinentCode AS code,
        ContinentName AS name
    FROM
        continents
QUERY;

var_dump($db->run($query)->fetchAll());
