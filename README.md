# Using Laravel Eloquent with you custom PHP.

To test this just clone the repo and run `composer install`

All the required dependencies will be installed. Once all things are installed.

Head to bootstrap.php file and your database information in the following code:

```
<?php
$capsule->addConnection([
    "driver" => "mysql",
    "host" =>"127.0.0.1",
    "database" => "database",
    "username" => "root",
    "password" => ""
]);
```

To migrate tables, head to **tables/User.php**, **tables/Roles.php** , **tables/Todo.php** one by one in your browser. 

Once all done head to **index.php** file to test it. 


