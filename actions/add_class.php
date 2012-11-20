<?php

// Put all POST data into their own variables
extract($_POST);

$pics = "$type.jpg";
//check that all values are Provided
if($classname !='' && $teacher != '' && $abrev != '' && $block != '' && $semester != '') {
	$file = fopen('../data/classes.txt','a+');
	$timestamp = time();
	fwrite($file,"$classname,$block,$semester,$abrev,$teacher,$timestamp,$pics\n");
	fclose($file);
	header('Location:../');
}else {
	header('Location:../?p=form_add_class');
}

?>