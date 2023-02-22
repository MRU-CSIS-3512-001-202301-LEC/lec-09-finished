<?php

// ⚠️ from Security chapter in textbook (16.5 Security Best Practices, Listing 16.3)

// require 'database/DatabaseHelper.php';
// $config = require 'database/config.php';

// $db = new DatabaseHelper($config);

$digest = password_hash("password", PASSWORD_BCRYPT, ['cost' => 12]);
var_dump($digest);
// $query = <<<QUERY
//     INSERT INTO adminlogin(username, digest)
//     VALUES (:user, :digest)
// QUERY;


// $db->run($query, [":user" => "jp", ":digest" => $digest]);
