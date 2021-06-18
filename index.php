<?php 
//comment 
$name = "Flora"; //variable dollar sign in front of it 
$day = "Friday"; 

$date = 26; //no quotes for numbers 

$test ="Hello PHP"; 

echo "Hello, ". $name . " Today is ".$day; //. is like +(concatenated), if you want to see space you need to add in in betweek quotes  

echo "<h1>$date</h1>"; //output html without double quotes 

echo '<p>'. $day . '</p>'; //output html with single quotes 
?> 

<!-- div containing ph code -->

<div style="background-color:green;color:white;">
    <?php echo $test ?> 
</div>