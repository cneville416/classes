<form class="form-horizontal" action="actions/add_class.php" method="post" enctype="multipart/form-data">
	
	<div class="control-group">
		<label class="control-label" for="classname">Class</label>
		<div class="controls inline">
			<input class="classname" type="text" name="classname" placeholder="Class Name" class="span2"/>
		</div>
	</div>
		
		
	<div class="control-group">
		<label class="control-label" for="teacher">Teacher</label>
		<div class="controls inline">
			<select name="abrev" class="abrev">
				<option>Mr.</option>
				<option>Mrs.</option>
				<option>Ms.</option>
			</select>
			<input type="text" name="teacher" placeholder="Teacher Last Name" class="span2 teacher"/>
		</div>
	</div>	
		
	<div class="control-group">	
		<label class="control-label" for="block">Block </label>
		<select class="blocks" name="block">
						<option value="">Block</option>
						<?php 
						
						 
						for($blocknum = 1; $blocknum <=4; $blocknum++) {
							echo "<option value=\"$blocknum\">$blocknum</option>";
						}
						?></select>
	</div>	
		
	<div class="control-group">
		<label class="control-label" for="semester">Semester  </label><select class="semesters" name="semester">
						<option value="">Semester</option>
						<?php 
						
						 
						for($semesternum = 1; $semesternum <=4; $semesternum++) {
							echo "<option value=\"$semesternum\">$semesternum</option>";
						}
						?>
						
					</select>
	</div>
	<div class="control-group">
		<label><input type="radio" value="books" name="type"/>
		<img src="img/classpics/books.jpg" alt=""  class="classpic"/></label>
	</div>
	<div class="control-group">
		<label><input type="radio" value="Computer" name="type"/>
		<img src="img/classpics/Computer.jpg" alt="" class="classpic" /></label>
	</div>
	<div class="control-group">
		<label><input type="radio" value="history" name="type"/>
		<img src="img/classpics/history.jpg" alt="" class="classpic" /></label>
	</div>
	<div class="control-group">
		<label><input type="radio" value="math" name="type"/>
		<img src="img/classpics/math.jpg" alt="" class="classpic" /></label>
		</div>
	<div class="control-group">
		<label><input type="radio" value="Science" name="type"/>
		<img src="img/classpics/Science.jpg" alt="" class="classpic" /></label>
	</div>
	<div class="control-group">
		<label><input type="radio" value="Foreign_Language" name="type"/>
		<img src="img/classpics/Foreign_Language.jpg" alt="" class="classpic" /></label>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Add</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>
