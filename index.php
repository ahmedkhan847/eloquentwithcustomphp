<?php
// ini_set("error_reporting",-1);
require "bootstrap.php";

// use Illuminate\Database\Capsule\Manager as Capsule;

// Todo::Create(
//     [
//         "todo" => "asd",
//         "category" => "ded",
//         "description" => "asd"
//     ]
// );
// $passwordkhan = password_hash("ahmedkhan",PASSWORD_DEFAULT);
// $user = User::where("email","ahmedkhan2@lbs.com")->first();
// dd(password_verify("ahmedkhan",$user->password));

// $todo = Todo::all()->toArray();
$roles = Role::find(2);
// $user = User::Create([
//     'name' => "Ahmed Khan",
//     'email' => "ahmed.khan@lbs.com",
//     'password' => password_hash("ahmedkhan",PASSWORD_BCRYPT),
// ]);
$user =User::find(1);
$permissions =$user->getPermissionsViaRoles();
foreach ($permissions as $permission) {
    var_dump($permission->name);
}

