<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Startseite</title>

    <?php include("deutsch/head_metatags.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print" href="../style/style.css"/>

    <meta http-equiv="refresh" content="0; URL=de/startseite.php"/>

</head>

<body>
<?php include("deutsch/topnav.php"); ?>

<?php include("deutsch/header.php"); ?>

<?php include("deutsch/navigation/_sprachwechsel.php"); ?>

<div id="wrapper">

<div id="sidebar-wrapper">

    <?php
        $link = basename(__FILE__);
        include("deutsch/sidebar.php");
    ?>

</div>

<div id="content-wrapper">

    <div id="content">

		<?php include("deutsch/home_inc.php"); ?>

    </div>

</div>

</div>

<?php include("deutsch/footer.php"); ?>
<div id="footer">

</div>

<?php include("deutsch/analytics.php"); ?>
</body>
</html>