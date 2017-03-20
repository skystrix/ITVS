<?php include("config.php"); ?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>unt</title> 
    <link rel="stylesheet" type="text/css" href="style.css"/>  
</head>
    
<body>
    
    <h1> My online</h1>
    
    <?php

    $quary="select * from product";
    $sql=mysqli_quary($con,$query);

    if(mysqli_num_rows($sql)>0){
    	while(mysqli_fetch_assoc($sql)){
    ?>

    <div class="product">
    <img src="cart/images/<?php echo $row['Image']?>">
    <h3><?php  echo $raw['Name']?> </h3>
    <p><?php? echo $row['Price']></p>
    <div class:"btn"><a href="">Add to Cart </a></div>
    	
    </div>\
    <?php
    

    	}

    }
    
    
    ?>
    
    
 </body>
</html>