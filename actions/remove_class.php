<?php 
extract($_GET);

//Load all classes into the PHP array
$classes_array = file('../data/classes.txt', FILE_IGNORE_NEW_LINES);

//Find the class with a class name with one give in the QS ($classname)
//and remove it from the PHP array
for($i = 0; $i < count($classes_array); $i++) {
	//Check to see if $classes_array[$i] has $classname in it
	if(stristr($classes_array[$i],$classname)!= false ) {
		
		// Remove the $ith element of $classes_array
		unset($classes_array[$i]);
		break;
	}
}




//Write the remaining classes back to the data file
if (sizeof($classes_array) > 0){
	$classes_string = implode("\n", $classes_array);
	$string_to_write = "$classes_string\n";
}
else {
	$string_to_write = '';
}
file_put_contents('../data/classes.txt',$string_to_write);
header('Location:../')
?>