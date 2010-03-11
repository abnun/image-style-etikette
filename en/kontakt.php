<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner: Image, Style, Etikette</title>

    <?php include("head_metatags.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print" href="../style/style.css"/>

    <script src="../javascript/prototype.js" type="text/javascript"></script>
    <script src="../javascript/effects.js" type="text/javascript"></script>

</head>

<body>

<?php include("_topnav.php"); ?>

<?php include("header.php"); ?>

<?php include("language_switch.php"); ?>

<div id="wrapper">

<div id="sidebar-wrapper">

    <?php
        $link = basename(__FILE__);
        include("sidebar.php");
    ?>

</div>
    
<div id="content-wrapper">

    <div id="content">

        <div>
            <h1 class="ueberschrift1">
                Kontakt
            </h1>
            <br/>
            <div>
                Birgit Brenner
                <br/>
                Hohensteinstr. 68
                <br/>
                74211 Leingarten
                <br/>
                <br/>
                Tel +49 (0)7131 / 642 60 60
                <br/>
                Mobil  +49 (0)177 / 30 30 773
                <br/>
                e-Mail <a href="mailto:consulting@b-brenner.com">consulting@b-brenner.com</a>
                <br/>
                <br/>
                http://www.how2behave.com
                <br/>
                http://www.b-brenner.com
                <br/>
                <br/>
                Rufen Sie uns an oder schicken Sie uns eine Mail.
                <br/>
                Wir freuen uns auf Sie!
            </div>
            <form action="../php/sendmail.php">
                <p>
                    <label>Vorname</label>
                    <input name="vorname" type="text" size="30"/>
                    <label>Name</label>
                    <input name="name" type="text" size="30"/>
                    <label>E-Mail</label>

                    <input name="email" type="text" size="30"/>
                    <label>Kommentar</label>
                    <textarea name="nachricht" rows="5" cols="5"></textarea>
                    <br/>
                    <input class="button" type="submit"/>
                </p>
            </form>

        </div>
    </div>

</div>

</div>

<div id="footer">
    <div>
        <!--Birgit Brenner | <a href="mailto:consulting@b-brenner.com">consulting@b-brenner.com</a>--><!-- | <a
        href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> | <a
        href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="mailto:markus.mu@web.de">design by
    Markus Mueller</a>-->
    </div>
</div>

</body>
</html>