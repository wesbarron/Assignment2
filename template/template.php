<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
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
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <a class="navbar-brand" href="#">Logo</a>
                <ul class="navbar-nav">
                    <?php nav_bar(); ?>
                    </li>
                </ul>
                </nav>
                <h1><?php site_name(); ?></h1>
            </header>
        </div>
        <div id="content">
            <article>
                <div class ="jumbotron"><h2><?php page_title(); ?></h2></div>
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