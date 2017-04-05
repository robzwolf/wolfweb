<?php // header.php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

?>

<!doctype html>
<html>
    <head>
        <title>Wolf Web</title>
        <link href="style.css" type="text/css" rel="stylesheet" />
        <link href="roboto.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="script.js"></script>
        <?php if(strpos($_SERVER["HTTP_USER_AGENT"], "AppleWebKit") !== FALSE)
        {
            include "safari-mobile.php";
        }
        ?>
    </head>

    <body>
        <header>
            <h1>Wolf Web</h1>
            <h2>by Robbie Jakob-Whitworth</h1>
        </header>

        <main>
            <div id="top-spacer">&nbsp;</div>
            <?php // Follows onto PAGENAME.php ?>
