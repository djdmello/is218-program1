<?php
$myfile= fopen("data.csv","w");
$txt= "John Doe\n";
fputcsv($myfile,$txt);
fclose($myfile);
if(!file_exists("data.csv"))
{
	die("File not found");
}
else
{
	print "File exists";
}


?>
