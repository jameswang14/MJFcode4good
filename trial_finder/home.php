<?php
session_start();
?>

<html>
    <head>

        <title>Test </title>
        <meta charset="UTF-8">
        <meta name ="viewport" content ="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="css/styles.css" />  
        <link rel="stylesheet"  type="text/css" media="only screen and (max-width: 700px)"
              href="css/queries.css" />
         <script src="js/jquery-1.8.1.min.js"></script>
        <script src="js/jquery-ui-1.8.23.custom.min.js"></script>
        
        
        <script src="js/script.js" type="text/javascript"></script> 
    </head>

    <body>
        <?php
        // put your code here
        ?>
        <div id="center"> 
        
        <div id="loginbox">
            <div class="z1">
            Login
            </div>
            <form method="get" action='index.php'>
                </br>
                <div id="page1">
                    Username : <input type="text" name="username"></br> 
                    Email : <input type="text" name="email"></br>
                    Password : <input type="password" name="password"></br> 
                    Address : <input type="text" name="address"></br> </div>
 
                 <div id="page2">
                    Gender : <input type="text" name="gender"></br>
                    Travel Distance : <input type="text" name="travel_distance"></br>
                    Secondary Location : <input type="text" name="sec_location"></br> 
                    Date of Birth : <input type="text" name="dob"></br> </div>

                 <div id="page3">
                    Race/Ethnicity 
                    Date of Diagnosis 
                     </div>
                 <div id="page4">
                     Present_Condition 
                     Motor_Symptoms 
                  </div>
                
                <div id="page5">
                    Non_motor symptoms 
                    First_Date_symptoms 
                    
                </div>
                
                <div id="page6"></br>
                <input type="submit" name="add" value="Add" id="log_in"> </div>
                
                <div id="page7">
                    <input type="button" id="left" value="<" >
                <input type="button" id="right" value=">" > </div> 
                </div>
                
 
</form>
      
        </div>
        </div>
    </body>
</html>