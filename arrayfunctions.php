<?php
echo '1. Array_chunk method example';
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));
echo '2. Array_column method example';
// Array representing a possible record set returned from a database
$records = array(
    array(
         'id' => 2135,

	 'first_name' => 'John',
	 'last_name' => 'Doe',
	 ),
    array(
 	 'id' => 3245,
	 'first_name' => 'Sally',
	 'last_name' => 'Smith',
	 ),
    array(
	 'id' => 5342,
	 'first_name' => 'Jane',
	 'last_name' => 'Jones',
	 ),
    array(
    	 'id' => 5623,
	 'first_name' => 'Peter',
	 'last_name' => 'Doe',
	 )
										);
									        $first_names = array_column($records, 'first_name');	
										print_r($first_names);
echo '3.Array_combine method example';

										$a=array('green', 'red', 'yellow');
										$b=array('avocado', 'apple', 'banana');
										$c=array_combine($a, $b);
print_r($c);
echo '4.Array_count_values method example';
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

echo '5.Array_diff_assoc method example';
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);

echo '6.Array_diff_key method example';
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_key($array1, $array2));

echo '7.Array_diff method example';
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);

echo '8.Array_fill_keys method example';
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);

echo '9.Array_fill method example';
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);

echo '10.Array_flipped method example';
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);

echo '11.Array_intersect_assoc method example';
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);

echo '12.Array_intersect_key method example';
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array1, $array2));

echo '13.Array_key_exists method example';
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
    }

echo '14.Array_merge method example';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

echo '15.Array_pop method example';
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);

									
?>
