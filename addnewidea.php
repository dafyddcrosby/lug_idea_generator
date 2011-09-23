<?php
// Copyright 2011, Dafydd Crosby, dafyddcrosby.com
// Licensed under the Eiffel Forum License 2.

$new_idea = htmlspecialchars($_GET["new_idea"]);
$new_idea = substr($new_idea, 0, 100)."\n"; //Cap at 100 characters

$handle = fopen("newideas.txt", "a");
fwrite($handle, $new_idea);
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/index.php");
?>
