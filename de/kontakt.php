<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner - image . style . etikette: Kontaktformular</title>

    <?php include("_head_metatags.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print" href="../style/style.css"/>

    <script src="../javascript/prototype.js" type="text/javascript"></script>
    <script src="../javascript/effects.js" type="text/javascript"></script>

</head>

<?php include("_analytics.php"); ?>

<body>

<?php include("_topnav.php"); ?>

<?php include("_header.php"); ?>

<?php include("_language_switch.php"); ?>

<div id="wrapper">

<div id="sidebar-wrapper">

    <?php
        $link = basename(__FILE__);
        include("_sidebar.php");
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
                image . style . etikette
                <br/>
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

			<?php
				$formSubject = "Kontaktformular";
				include("_formular.php");
			?>

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