<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/Styles.css">

    <title>My Profile</title>
</head>
<body>
    <header>
        <h1>My Profile</h1>
    </header>
    <main>
        <fieldset>
            <?php $name="Doaa Alali"?>
            <label for="">Name:<?php echo "$name"?></label>\\
            <?php echo gettype($name); ?>


            <br>
            <?php $age=28?>
            <label for="">Age:<?php echo "$age"?></label>\\
            <?php echo gettype($age); ?>
            <br>
            <?php $job="Backend Developer"?>
            <label for="">Job Title:<?php echo "$job"?></label>\\
            <?php echo gettype($job); ?>
            <br>
            <?php $city="Damascus"?>
            <label for="">City:<?php echo "$city"?></label>\\
            <?php echo gettype($city); ?>
            <br>
            <?php $experience="1.5 year"?>
            <label for="">Years of Experience:<?php echo "$experience"?></label>\\
            <?php echo gettype($experience); ?>
            <br>
            <?php $driver="none"?>
            <label for="">driver license:<?php echo "$driver"?></label>\\
            <?php echo gettype($driver ); ?>
            <br>
            <?php 
            $skill=["Django","python","ui/ux"];?>
            <label for="">Skill:
            <!-- <?php
           // echo"<pre>";
            //print_r($skill);
            //echo"</pre>";
            ?> -->
            
            <ul>
                <li>Django</li>
                <li>Python</li>
                <li>UI/UX</li>
            </ul>
            </label>
            
            
            

        </fieldset>
    </main>
    
</body>
</html>