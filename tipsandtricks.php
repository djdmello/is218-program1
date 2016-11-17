<?php
// yes, the argument list can be empty
function foo()
{
	// returns an array of all passed arguments
	$args = func_get_args();
	     
	foreach ($args as $k => $v)
	{
		echo "arg".($k+1).": $v\n";
	}
}
foo();
foo('hello');
foo('hello', 'world', 'again');
// get all php files AND txt files
$files = glob('*.{php,txt}', GLOB_BRACE);
print_r($files);
echo "Initial: ".memory_get_usage()." bytes \n";
// let's use up some memory
for ($i = 0; $i < 100000; $i++) 
{
	$array []= md5($i);
}
// let's remove half of the array
for ($i = 0; $i < 100000; $i++) 
{
	unset($array[$i]);
}
echo "Final: ".memory_get_usage()." bytes \n";
echo "Peak: ".memory_get_peak_usage()." bytes \n";
print_r(getrusage());
my_debug("some debug message", __LINE__);
my_debug("another debug message", __LINE__);
function my_debug($msg, $line) 
{
	echo "Line $line: $msg\n";
}
echo uniqid('foo_');
echo uniqid('',true);
echo uniqid('bar_',true);
$myvar = array
(
	'hello',
        42,
	array(1,'two'),
	'apple'
);
$string = json_encode($myvar);
echo $string;
$newvar = json_decode($string);
print_r($newvar);
$string =
"Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Nunc ut elit id mi ultricies
adipiscing. Nulla facilisi. Praesent pulvinar,
sapien vel feugiat vestibulum, nulla dui pretium orci,
non ultricies elit lacus quis ante. Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Aliquam
pretium ullamcorper urna quis iaculis. Etiam ac massa
sed turpis tempor luctus. Curabitur sed nibh eu elit
mollis congue. Praesent ipsum diam, consectetur vitae
ornare a, aliquam a nunc. In id magna pellentesque
tellus posuere adipiscing. Sed non mi metus, at lacinia
augue. Sed magna nisi, ornare in mollis in, mollis
sed nunc. Etiam at justo in leo congue mollis.
Nullam in neque eget metus hendrerit scelerisque
eu non enim. Ut malesuada lacus eu nulla bibendum
id euismod urna sodales. ";
$compressed = gzcompress($string);
echo "Original size: ". strlen($string)."\n";
echo "Compressed size: ". strlen($compressed)."\n";
$original = gzuncompress($compressed);
$start_time = microtime(true);
register_shutdown_function('my_shutdown');
function my_shutdown() 
{
	global $start_time;
	echo "execution took: ".
	            (microtime(true) - $start_time).
		                " seconds.";
}

?>
