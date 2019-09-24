<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="template/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <script>
    $(document).ready(function() {
        $("button").click(function() {
            $.get("template/comic.php", function(data, status) {
                $("#comic").html(data);
                
            })
        })
    })
</script> 
    
</head>
<body>
    
    <div class="wrap">
        <div id="header">
            <header>
                <h1><?php site_name(); ?></h1>
            </header>
        </div>
        <div id="content">
            <article>
                <h2><?php page_title(); ?></h2>
                <div id="right-align"><?php page_content(); ?><div>
                <br>
                <div id="comic">
                    <?php first_comic(); ?>
                    <br><br>
  
                </div>
            </article>
        </div>
        <div id="footer">
            <footer>
                <small>&copy;<?php echo date('Y'); ?>.<?php site_version(); ?></small>
            </footer>
        </div>
    </div>
</body>
</html>