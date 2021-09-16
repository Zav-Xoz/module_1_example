<?php
include 'functions.php';
$db = include 'database/first.php';


//       getAll('posts');
//       getOne('posts', $id);
//       create($table, $data);
//       update($table, $data, $id);
//       delete($table, $id);


$posts = $db->getAll('posts');
output($posts);
