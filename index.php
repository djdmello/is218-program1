<?php
// This is how you print text in php
echo 'hello world';
// This is how you set a variable in php

$myvar= 'Some Text I want to store in a variable';
//This is how to print the variable
echo '<br>';
echo '$myvar';
echo '<br>';
echo "$myvar";
// Learning about arrays
$myarray= array();
$myarray[]= 'some value 1';
$myarray[]= 'some value 2';
$myarray[]= 'some value 3';
print_r($myarray);
$myAssoc= array('value1' => $myarray, 'value2' => $myarray);
print_r($myAssoc);
print_r($myAssoc['value1']);
// This is how to define class
class myclass {
	public $mypublic;
	private  $myprivate;
	protected $myprotected;
	public function __construct() {
		$this->mypublic=1;
		$this->myprivate=2;
		$this->myprotected=3;
		$this->$name= 'Daniel';
	}
	public function sayHello($name){
		echo 'Hello ' . $name . "<br>" ;
	}

}
// This is how to print a new class
$obj= new myclass;
print_r($obj);
?>


