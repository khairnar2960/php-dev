<?php


// include // includes file if exist
// include_once // include only one time
// require // includes file if exist else give an error
// require_once // include only once if not included
$title = 'Home';
?>
<?php require_once 'header.php' ?>
<h1>Home</h1>
<form action="">
	<input type="text" name="email">
	<input type="password" name="password">
	<button type="submit">Login</button>
</form>
<?php require_once 'footer.php' ?>