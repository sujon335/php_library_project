<?php include("includes/header.php"); ?>
<h1>Book edition</h1>
<a href="http://localhost/ci/index.php/site/books">back</a>



<div>

         <?php if(isset($records)):  foreach($records as $row): ?>
           <?php echo form_open("site/update_book/$row->id"); ?>
    Name:   <?php echo form_input('name',$row->name); ?><br/>
    Writer: <?php echo form_input('author',$row->author); ?><br/>
    Type:   <?php echo form_input('type',$row->type); ?><br/>
    Copy:   <?php echo form_input('copy',$row->copy); ?><br/><br/>
    <?php echo form_submit('submit','update'); ?><br/>

    Delete <?php echo anchor("site/delete_book/$row->id",$row->name); ?>

     <?php endforeach; ?>
    <?php endif; ?>


        <?php echo validation_errors('<p class="error" >'); ?>
        <?php if(isset($msg)) echo $msg; ?>
	<?php echo form_close(); ?>
    
	</div>




</body>
</html>