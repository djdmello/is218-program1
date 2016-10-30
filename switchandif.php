<?php
$mystring="";

if(empty($mystring))
{
	echo "Empty";
}
if(is_null($mystring)==False)
{
	echo "Works";
}
if(isset($mystring))
{
	echo "Passed";
}
if(is_null($mystring)!=True)
{
	echo "Set";
}
switch (empty($mystring))
{
	case True:
		echo "String is empty";
		break;
	case False:
		echo "String is not empty";
		break;
	default:
		echo "The string may be empty";
		break;
}
switch (is_null($mystring))
{
	case False:
		echo "String is not empty";
		break;
	case True:
		echo "String is empty";
		break;
	default:
		echo "String may be empty";
		break;
}
switch (isset($mystring))
{
	case True:
		echo "String has value";
		break;
	case False:
		echo "String has no value";
		break;
	default:
		echo "String may or may not have value";
		break;
}
switch (empty($mystring))
{
	case True:
		echo "Has no value";
		break;
	case False:
		echo "Has value";
		break;
	default:
		echo "May have value";
		break;
}

?>
