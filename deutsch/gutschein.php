<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Knigge Training | Business Etikette | Gutscheinbestellung</title>

    <?php include("verschiedenes/_head_metatags.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print" href="/style/style.css"/>

    <script src="../javascript/prototype.js" type="text/javascript"></script>
    <script src="../javascript/effects.js" type="text/javascript"></script>

</head>

<body>

<?php include("navigation/_top_navigation.php"); ?>

<?php include("seitenaufbau/_header.php"); ?>

<?php include("navigation/_sprachwechsel.php"); ?>

<div id="wrapper">

<div id="sidebar-wrapper">

    <?php
        $link = basename(__FILE__);
		include("navigation/_seiten_navigation.php");
    ?>

</div>

<div id="content-wrapper">

    <div id="content">

        <div>
            <h1 class="ueberschrift1">
                Gutscheinbestellung
            </h1>
            <br/>
            <div>
                <img src="../images/gutschein/Gutschein.jpg" alt="Birgit Brenner | Image. Style. Etikette | Knigge Training | Business Etikette | Gutscheinbestellung" style="float: right; padding-left: 5px;"/>
                Bitte f&uuml;llen sie nachstehendes Formular aus. Geben Sie dabei <b>den gew&uuml;nschten Betrag</b> Ihres Gutscheins an, damit wir Ihre Anfrage schnellstm&ouml;glichst bearbeiten k&ouml;nnen.
            </div>

			<?php
				$formSubject = "Gutscheinanfrage";
				include("verschiedenes/_formular.php");
			?>

        </div>
    </div>

</div>

</div>

<?php include("seitenaufbau/_footer.php"); ?>

<?php include("verschiedenes/_analytics.php"); ?>
</body>
</html>