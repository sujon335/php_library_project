<?php include("includes/header.php"); ?>

<h1>Students Login Page</h1>
<a href="http://localhost/ci/">Home</a>
<div >
	<?php echo form_open('site/slogin'); ?> 
	<P>
		<label for="sname">Username</label>
		<input type="text" name="sname" id="sname" />
	</p>
	
	<P>
		<label for="spass">Password</label>
		<input type="password" name="spass" id="spass" />
	</p>
	<p>
		<input type="submit" value="Login" />
	</p>
	<?php echo form_close(); ?>
	</div>


</body>
</html>