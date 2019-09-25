<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <link href="template/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

    //Button click function and Ajax call.
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
            <div class="jumbotron">
             <div id="site-name"><h2><?php site_name(); ?></h2></div>
             </div>
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <a class="navbar-brand" href="#">Logo</a>
                <ul class="navbar-nav">
                    <div id="link"><?php nav_bar(); ?></div>
                    </li>
                </ul>
                </nav>

            </header>
        </div>
        <div id="content">
            <article>

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
