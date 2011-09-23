<html>
<head>
<title>You should do a LUG talk on...</title>
</head>
<body>
<br>
<?php

$filename = 'ideas.txt';
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));

$talk_ideas = explode("\n", $contents);
array_pop($talk_ideas); // Get rid of blank last line
$talk_len = count($talk_ideas);
$selected = rand(0, $talk_len-1);
echo '<center><h3>You should do a LUG talk on:</h3>';
echo '<h1>'.$talk_ideas[$selected].'</h1>';
?>
<br><br><br><br><br><br><br>
<form action="addnewidea.php">New idea:<input type="text" name="new_idea" maxlength=30><input type="submit" name="submit"></form>
<br><br>
<a href="ideas.txt">See the full list</a>
</center>
</body>
</html>
