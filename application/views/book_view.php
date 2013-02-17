<?php include("includes/header.php"); ?>
<h1>Books List</h1>
<h2>Click book name to edit or delete</h2>
<a href="http://localhost/ci/index.php/site/adminpage">Home</a><br/>
<a href="add_book">+Add New Book</a>


            <table border="1" width="800" cellpadding="10" >
                <tr>
                    <th>Book Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Available Copy</th>
                </tr>
                <?php if(isset($records)):  foreach($records as $row): ?>

                    <tr>
                        <td> <?php echo $row->id; ?> </td>
                         <td> <?php echo $row->type; ?> </td>
                      <td> <?php echo anchor("site/book_edit/$row->id",$row->name); ?> </td>
                        <td> <?php echo $row->author; ?> </td>
                        <td> <?php echo $row->copy; ?> </td>
                        
                    </tr>
                            <?php endforeach; ?>
                            <?php else : ?>

                            <h2>No Books stored</h2>

                           <?php endif; ?>


            </table>

    </body>
</html>
