<?php include("includes/header.php"); ?>
<h1>Registration approve </h1>
<a href="http://localhost/ci/index.php/site/adminpage">Home</a>

            <table border="1" width="500" cellpadding="10" >
                <tr>
                    <th>Roll No.</th>
                    <th>Name  </th>
                    <th>Approve</th>
                </tr>
                <?php if(isset($records)):  foreach($records as $row): ?>
                        
                    <tr>
                        <td> <?php echo $row->id; ?> </td>
                        <td> <?php echo $row->name; ?> </td>
                        <td> <?php echo anchor("site/register/$row->id",$row->name); ?> </td>
                    </tr>
                            <?php endforeach; ?>
                            <?php else : ?>

                            <h2>No request for registration..</h2>

                           <?php endif; ?>
                   
                              
            </table>

    </body>
</html>
