<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="template/style.css" rel="stylesheet" type="text/css">

</head>

<body>

     <!--Navbar-->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a class="navbar-brand" href="#"><?php site_name() ?></a>


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#"><?php  nav_bar(); ?></a>
                    </li>
                </ul>
                </div>
                </nav>

    <div class="wrap">
        <div id="header">
            <header>
            <div class="jumbotron">
             <div id="site-name"><h2><?php page_title(); ?></h2></div>
            </div>
            </header>


        </div>

        <div id="content">

            <article>

                <div id="right-align"><?php page_content(); ?><div>
                <br>
                <div id="comic">
                   <?php first_comic(); ?>
                </div>
            </article>
        </div>
        <div id="footer">
            <footer>
                <small>&copy;<?php echo date('Y'); ?>.<?php site_version(); ?></small>
            </footer>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/f1c966bcb4.js"></script>


<script>
        // Ajax to get data from comic.php

        $('#comic-button').click(function (e){
          $.ajax({
              type: 'get',
              url: "template/comic.php",
              data: {data : true},
              dataType:"HTML",
              success: function(data)
              {
                  $('#comic').html(data) // The server's response is now placed inside your target div
              },
              error: function()
              {
                  alert("Failed to get data.");
            }
          }); // Ajax close
          return false; // So the button click does not refresh the page
      }) // Function end

    </script>
    </body>
</html>
