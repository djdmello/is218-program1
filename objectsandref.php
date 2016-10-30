<?php
//get method example
$class = new ReflectionClass('ReflectionClass');
$method = $class->getMethod('getMethod');
var_dump($method);
//get interface method example
interface Foo { }

interface Bar { }

class Baz implements Foo, Bar { }

$rc1 = new ReflectionClass("Baz");

print_r($rc1->getInterfaces());
//get extension method example
$class = new ReflectionClass('ReflectionClass');
$extension = $class->getExtension();
var_dump($extension);
//get property method example
$class = new ReflectionClass('ReflectionClass');
$property = $class->getProperty('name');
var_dump($property);
// to string method example
$reflectionClass = new ReflectionClass('Exception');
echo $reflectionClass->__toString();

?>

