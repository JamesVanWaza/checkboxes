<?php include 'html5req.php';?>
<h1>Which Hobbies do you like</h1>
<form action="" id="webForm" method="POST">
	<div class="row">
		<div class="large-12 columns">
			<input type="checkbox" name="Hobbies[]" value="Books" /><label>Books</label><br />
			<input type="checkbox" name="Hobbies[]" value="Movies" /><label>Movies</label><br />
			<input type="checkbox" name="Hobbies[]" value="Sports" /><label>Sports</label><br />
			<input type="checkbox" name="Hobbies[]" value="Games" /><label>Games</label><br />
			<input type="checkbox" name="Hobbies[]" value="Travelling" /><label>Travel</label><br />
			<br />
			<button class="submit-btn">Submit</button>
		</div>
	</div>
</form>
