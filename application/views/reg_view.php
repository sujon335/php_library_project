<?php include("includes/header.php"); ?>

<h1>Registration</h1>
<a href="http://localhost/ci/">Home</a>
<div>
	<?php echo form_open('site/create_member'); ?>


	<P>
		<label for="name">Username:</label>
		<input type="text" name="name" id="name" />
	</p>
	<P>
		 <label for="id">Student id:</label>
		<input type="text" name="id" id="id"  />
	</p>

	<P>
		<label for="email">Email add:</label>
		<input type="text" name="email" id="email" />
	</p>
	<P>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" />
	</p>
        <P>
		<label >Confirm :</label>
		<input type="password" name="password2" />
	</p>
	<p>
		<input type="submit" value="Apply" />
	</p>

            
        <?php echo validation_errors('<p class="error" >'); ?>

	<?php echo form_close(); ?>
	</div>




</body>
</html>