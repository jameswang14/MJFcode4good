<!DOCTYPE html>

<?php

include 'AccountDAO.php'; 
?>
<?php
session_start();
?>
<html>
    <head>

        <title>Lehigh University EMS Inventory </title>
        <meta charset="UTF-8">
        <meta name ="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/styles.css" />  
             <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>        
        <script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>

          <script src="js/script.js" type="text/javascript"></script> 
    </head>

    <body>
        
        <form method="get" action='index.php'>
            <div id="center">
            <table id="table">  
<!--                <table style="float:left; margin-right:15px;" border="1">-->
                <tr>

                    <th>Item</th>
                    <th> </th>
                    <th>Quantity</th>
                    <th> </th>
                </tr>

                <?php
                if (isset($_SESSION['trial'])) {
                    $trial = $_SESSION['trial'];
                   
                } 
//                else {
//                    $dao = new TaskManagerDAO();
//                    $tasks = $dao->getTaskList();
//                }

                $i = 0;
                $size = sizeof($trial );
                
                for ($i = 0; $i < $size; $i++) {
                    $trials  = $trial[$i];

                    echo "<tr id='$$trials->id'>";
                    echo "<td>$trials->title</td>";
                    echo "<td><input type='button' value='+' class='plus'></td>";
                    echo "<td><input type='text' class='quantity' value='$items->quantity'></td>";
                    //$id1 = (int) $items->id;               
                    echo "<td><input type='button' value='-' class='minus'></td>";
                    echo "</tr>";
                }
                ?>

                   <script src="js/script.js" type="text/javascript"></script>  
            </table>


            
        </form> 
</div>
            
    </body>
</html>
