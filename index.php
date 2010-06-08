<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Startseite</title>

    <?php include("deutsch/verschiedenes/_head_metatags.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print" href="style/style.css"/>

    <meta http-equiv="refresh" content="0; URL=deutsch/startseite.php"/>

</head>

<body>
<?php include("deutsch/navigation/_top_navigation.php"); ?>

<?php include("deutsch/seitenaufbau/_header.php"); ?>

<?php include("deutsch/navigation/_sprachwechsel.php"); ?>

<div id="wrapper">

<div id="sidebar-wrapper">

    <?php
        $link = basename(__FILE__);
        include("deutsch/navigation/_seiten_navigation.php");
    ?>

</div>

<div id="content-wrapper">

    <div id="content">

		<?php include("deutsch/_startseite-inhalt.php"); ?>

    </div>

</div>

</div>

<?php include("deutsch/seitenaufbau/_footer.php"); ?>
<div id="footer">

</div>

<?php include("deutsch/verschiedenes/_analytics.php"); ?>
</body>
</html>