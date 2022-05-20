<?php require "views/partials/header.view.php" ?>
    <table>
        <?php foreach($data as $d): ?>
            <?php
                echo "
                <tr>
                    <td>$d->name</td>  
                    <td>";
                        if($d->isComplete){
                         echo 'done'; 
                        }
                         else{
                             echo "Not Finished";
                         }
                echo "       
                    </td>  
                </tr>";
                ?>
            <?php endforeach; ?>
    </table>
<?php  require "views/partials/footer.view.php" ?>