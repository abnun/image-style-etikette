<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner - image . style . etikette: Gutscheinbestellung</title>

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
                Gutschein
            </h1>
            <br/>
            <div>
                <img src="../images/gutschein/Gutschein.jpg" alt="Gutschein" style="float: right; padding-left: 5px;"/>
                Bitte f&uuml;llen sie nachstehendes Formular aus. Geben Sie dabei <b>den gew&uuml;nschten Betrag</b> Ihres Gutscheins an, damit wir Ihre Anfrage schnellstm&ouml;glichst bearbeiten k&ouml;nnen.
            </div>

			<?php
				$formSubject = "Gutscheinanfrage";
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