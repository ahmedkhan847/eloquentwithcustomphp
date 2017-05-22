<?php
require "bootstrap.php";

$role = Role::Create([
    "name" => "admnin"
]);

$user = User::Create([
    'name' => "Ahmed Khan",
    'email' => "ahmed.khan@lbs.com",
    'password' => password_hash("ahmedkhan",PASSWORD_BCRYPT),
]);

dd($user->assignRole($role));

