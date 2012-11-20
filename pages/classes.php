<?php 
//Read all lines from the data file
	$lines = file('data/classes.txt' , FILE_IGNORE_NEW_LINES);
if(count($lines)> 0){
//Loop over the lines
	foreach($lines as $line) {
// At this point $line contains an entire line,
//With info seperated by commas
//Split the line's data into pieces that are,
//seperated by commas
	$classes_info = explode(',',$line);
	
	$classname = $classes_info[0];
	$block = $classes_info[1];
	$semester = $classes_info[2];
	$teacher = $classes_info[4];
	$abrev = $classes_info[3];
	$picture = $classes_info[6];
?>	 
	<div class="contact">
		<h3><?php echo"$classname"?></h3>
		<p class="teacher"><?php echo "Teacher: $abrev $teacher" ?></p>
		<img src="img/classpics/<?php echo $picture?>" class="classpic main"/>
		<p class="block"><?php echo "Block: $block"?></p>
		<p class="semester"><?php echo "Semester: $semester" ?></p>
		<a class="btn btn-danger remove" href="./actions/remove_class.php?classname=<?php echo $classname ?>"><i class="icon-trash icon-white"></i> Delete</a>
		
	</div>
	
<?php }} 
 else {
	echo '<div class="alert">You have no classes. Add one <a href="./?p=form_add_class">here</a></div>';
 }

?>