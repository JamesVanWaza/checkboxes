<?php
include 'html5req.php';
if (isset($_POST['submit'])) {
	$hobb = $_POST['Hobbies'];
	if (empty($hobb)) {
		echo ("<p>You didn't select any any hobby.</p>\n");
	} else {
		$N = count($hobb);
		echo ("<p>You selected $N Hobbies(s): ");
		for ($i = 0; $i < $N; $i++) {
			$var1 = $hobb[$i];
			include 'mysqli-connect.php';
			$table = "INSERT INTO `nvs`.`checkboxes` (`id`, `hobbie`, `date_created`) VALUES (NULL, '$var1', NOW())";
			mysqli_query($table) or die(mysqli_error());
			$inserted_fid = mysqli_insert_id();
			mysqli_close();
		}
		echo "<h3>" . "The Hobbies have been added" . "</h3>";
	}
} else {
	echo "<div data-alert class='alert-box alert round'>
					<h3>The Hobbies have not been added</h3>
						<a href='#' class='close'>&times;</a>
				</div>";
}
?>
<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
