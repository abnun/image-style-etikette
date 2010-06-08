<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Das Team</title>

    <?php include("verschiedenes/_head_metatags.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print" href="../style/style.css"/>

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
                Das Team
            </h1>
            <hr/>
            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
                        <div>
							<b>Annette Reckmann</b>
							<br/>
							<br/>
							Professionelle Farb- und Typberatung

						</div>
                    </td>
                    <td valign="top">
                        <img src="../images/team/annette_reckmann.jpg" alt="Birgit Brenner | Image. Style. Etikette | Partner" style="float:right; padding: 15px 5px 15px 100px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="margin-top: 20px;">
							<b>Miyesser Yurt</b>
							<br/>
							<br/>
							Ihre pers&ouml;nliche Hair-Stylistin

						</div>
                    </td>
                    <td valign="top">
                        <img src="../images/team/miyesser.jpg" alt="Birgit Brenner | Image. Style. Etikette | Partner" style="float:right; padding: 15px 5px 15px 100px;" />
                    </td>
                </tr>
            </table>

            <br/>
            <br/>
            <br/>


        </div>
    </div>

</div>

</div>

<?php include("verschiedenes/_analytics.php"); ?>
</body>
</html>