<!DOCTYPE html>
<html>

<head>

    <!-- Don't forget this to prevent error with a plugin.  -->
    <?php wp_head(); ?>

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Main CSS -->
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="container">

        <header>
            <div id="logo">
                <h1>
                    <a href="<?php echo home_url() ?>">Takafumi Kojima</a>
                </h1>
            </div>
        </header>
        <nav>
            <a class="nav-button" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <div class="nav-wrap">
                <?php wp_nav_menu(); ?>
            </div>
        </nav>