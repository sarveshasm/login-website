<?php
include_once('conn.php');
$query="select * from details";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DETAILS</title>
    </head>
    <body>
    <table style="width:600px; line-height:40px;">
    <tr>
        <th colspan="4"><h2>User Record</h2></th>
        </tr>
              <th> Email</th>
              <th> password </th>
             
        </tr>
       
        <?php while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr> 
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['password']; ?></td>
        </tr>
    <?php
               }
          ?>


    </table>
    </body>
    </html>
