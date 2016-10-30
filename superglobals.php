<?php
//$GLOBALS-reference all variables available in global scope
function test() {
    $foo = "local variable";

        echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
	    echo '$foo in current scope: ' . $foo . "\n";
	    }

	    $foo = "Example content";
	    test();
	    

//$_SERVER-SErver and execution environment information
echo $_SERVER['SERVER_NAME'];

//$_GET-HTTP GET variables
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';


//$_POST-HTTP POST variables
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';


//$_FILES-HTTP File Upload variables
$files = Array ();
$i = 0;

// Start with all inputs in $_FILES array
foreach ($_FILES as $input)
{
    $j = 0;
        
    foreach ($input as $property => $value)
    {
        if (is_array($value))
	{
	    $j = count($value); // Number of iterations
	    for ($k =0; $k < $j; ++$k)
	    {
										                $files[$i + $k][$property]= $value[$k];
	    }
        }
	else
	{
            $j = 1;
											    $files[$i][$property] = $value;
	}
     }
     $i += $j;
}


//$_COOKIE-HTTP Cookies
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';


//$SESSION-Session variables
session_start();
$_SESSION["1"] = "LOGGED";


//$_REQUEST-HTTP Request variables
switch($_SERVER['REQUEST_METHOD'])
{
case 'GET': $the_request = &$_GET; break;
case 'POST': $the_request = &$_POST; break;
.
. // Etc.
.
default:
}


//$_ENV-Environment variables
echo 'My username is ' .$_ENV["USER"] . '!';
?>

