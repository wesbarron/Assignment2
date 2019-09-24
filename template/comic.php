<?php
    $original_url = 'http://xkcd.com/614/info.0.json';
    $random_number = rand(1,1220);
    $new_url = substr_replace($original_url, $random_number, 16,-12);
    
    $json = file_get_contents($new_url);
    $obj = json_decode($json); 
    echo "<h2>".$obj->title."</h2>" . "<p>Year Published: ".$obj->year."</p>";
    echo "<img src='" . $obj->img . "' width='600px' height='300px' alt='Coming Soon!'>";
?>