<?php

$entries = json_decode(file_get_contents('entries.json'), true);
$id = $_GET['id'];

unset($entries[$id]);
file_put_contents('entries.json', json_encode(array_values($entries)));

header('Location: index.php');
exit;
