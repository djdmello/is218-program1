<?php
//$GLOBALS-reference all variables available in global scope
function test() {
    $foo = "local variable";

        echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
	    echo '$foo in current scope: ' . $foo . "\n";
	    }

	    $foo = "Example content";
	    test();
	    ?>
<?php
// $_SERVER-SErver and execution environment information
echo $_SERVER['SERVER_NAME'];
?>
