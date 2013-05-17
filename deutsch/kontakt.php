<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Knigge Training | Business Etikette | Kontaktformular</title>

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
                Rufen Sie uns an oder senden Sie uns eine Nachricht per Mail oder &uuml;ber unser Kontaktformular.
                <br/>
                Wir freuen uns auf Sie!
            </div>

			<?php
				$formSubject = "Kontaktformular";
				include("verschiedenes/_formular.php");
			?>

        </div>
    </div>

</div>

</div>

<?php include("seitenaufbau/_footer.php"); ?>

<?php include("verschiedenes/_analytics.php"); ?>
<?php include("verschiedenes/_highslide_imports.php"); ?>
</body>
</html>