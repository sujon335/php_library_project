<?php include("includes/header.php"); ?>

<h1>New Book addition</h1>
<a href="books">back</a>
<div>
	<?php echo form_open('site/create_book'); ?>


        <P>
		<label >Id       :</label>
		<input type="text" name="id"  />
	</p>
	<P>
		<label for="name">name   :</label>
		<input type="text" name="name" id="name" />
	</p>


	<P>
		<label for="author">Writer:</label>
		<input type="text" name="author" id="author" />
	</p>
	<P>
		<label for="type">Type   :</label>
		<input type="text" name="type" id="type" />
	</p>
        <P>
		<label >Copy    :</label>
		<input type="text" name="copy"  />
	</p>

	<p>
		<input type="submit" value="Create" />
	</p>


        <?php echo validation_errors('<p class="error" >'); ?>

	<?php echo form_close(); ?>
	</div>




</body>
</html>