<?php
$directory = 'songs/';
$files = array_diff(scandir($directory), array('..', '.'));
$mp3Files = array_values(preg_grep('/\.mp3$/', $files)); // Filter out only MP3 files
echo json_encode($mp3Files);
?>
