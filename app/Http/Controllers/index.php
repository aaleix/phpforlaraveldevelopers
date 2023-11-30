<?php

use Framework\App;
//use framework\Database\Database;

//require 'app/Models/Task.php';
//require 'framework/Database/Database.php';


//$task= new Task(1,'comprar pa', 'a la panaderia', 0);
//var_dump($task);

//$user='debian-sys-maint';
//$pass='JcmZgjVtmeYh0y4m';
//$dsn='mysql:host=localhost;dbname=phplaraveldevs';



//$database=new Database(App::get('config'));
//$tasks=$database->selectAll('tasks');
$tasks = App::get('database')->selectAll('tasks');
//$tasks=Database::selectAll('tasks');

$greeting = greet();

require '../resources/views/index.blade.php';