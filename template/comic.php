<?php
    $original_url = 'http://xkcd.com/614/info.0.json';
    $random_number = rand(1,1220);
    $new_url = substr_replace($original_url, $random_number, 16,-12);

    $json = file_get_contents($new_url);
    $obj = json_decode($json);
    echo "<h1>".$obj->title."</h1>" . "<h2>Year Published: ".$obj->year."</h2>";
    echo "<img src='" . $obj->img . "' width='55%' height='15%' alt='Coming Soon!'>";
?>