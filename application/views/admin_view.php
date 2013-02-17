<?php include("includes/header.php"); ?>

<h1>Admin Login</h1>
<a href="http://localhost/ci/">Home</a>

<div>
	<?php echo form_open('site/adminloginprocess');  ?>

	<P>
		<label for="aname">Username</label>
		<input type="text" name="aname" id="aname" />
           </p>
	
	<P>
		<label for="apass">Password</label>
		<input type="password" name="apass" id="apass" />
	</p>

	<p>
		<input type="submit" value="Login" />
	</p>

        <?php if(isset($msg)) echo $msg; ?>
	<?php echo form_close(); ?>

</div>

</body>
</html>