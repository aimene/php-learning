<?php
// load vendor autoload
require_once __DIR__ . '/vendor/autoload.php';

use JamesGordo\CSV\Parser;

// Initalize the Parser
$users = new Parser('simpeCSV.csv',",");

// loop through each user and echo the details
foreach($users->all() as $user) {
	echo "User Details: {$user->id} | {$user->first_name} {$user->last_name}";
}

echo "Total Parsed: " . $users->count() . " Users";