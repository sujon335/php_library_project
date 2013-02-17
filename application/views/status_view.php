<?php include("includes/header.php"); ?>
<h1>Students Status</h1>
<a href="http://localhost/ci/index.php/site/adminpage">Home</a>

            <table border="1" width="500" cellpadding="10" >
                <tr>
                    <th>Roll No.</th>
                    <th>Name  </th>
                    <th>Books</th>
                    <th>Fine</th>
                </tr>
                <?php if(isset($records)):  foreach($records as $row): ?>

                    <tr>
                        <td> <?php echo $row->id; ?> </td>
                        <td> <?php echo $row->name; ?> </td>
                        <td> <?php ?> </td>
                    </tr>
                            <?php endforeach; ?>
                            <?php else : ?>

                            <h2>No students are registered</h2>

                           <?php endif; ?>


            </table>

    </body>
</html>

