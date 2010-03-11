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
                Personal Consulting
            </h1>
            <hr>

            <ul>

                <li class="umgangskultur"><div class="text" style="text-align: left; float:left;"><b>Personal Shopping</b></div><div style="text-align: right; float: right;"><a href="#this" onclick="new Effect.BlindUp('umgangskultur');">schlie�en</a></div><div style="text-align: right;"><a href="#this" onclick="new Effect.BlindDown('umgangskultur'); new Effect.BlindUp('image');">�ffnen</a></div></li>
            </ul>
            <div id="umgangskultur" style="display:none;">
                <div>
                    Sie wollen Ihren individuellen Kleidungsstil entwickeln oder verfeinern?
                    <br/>
                    Sie wollen eine Basic-Garderobe zum vielf�ltigen kombinieren?
                    <br/>
                    Oder einfach ein neues Komplett-Outfit f�r die kommende Saison?
                </div>
                <br/>

                <div>
                    Sie stehen bei uns im Mittelpunkt!
                        Wir sind Ihre stilsichere Shopping-Begleitung!

                        Erleben Sie einen ?Tag des Shoppings? ohne Gleichen!
                    Keine Suche nach passenden Gesch�ften, Marken oder Ihrer eigenen Stilrichtung. Wir bringen Sie zielstrebig mit unserem stilsicheren Auge
                    zu Ihrer neuen Kleidung!

                </div>
                <br/>

                <div>
                    Voraussetzung: Sie gew�hren uns einen Blick in Ihren Kleiderschrank!
                </div>
                <br/>

                <div>
                    Ziel: Wir verleihen Ihnen das feine Gesp�r f�r Ihren Stil!
                </div>

                <br/>

                <div>
                    Sie m�chten einen pers�nlichen Beratungstermin?
                    <br/>
                    Schreiben Sie uns gleich eine Email oder rufen Sie uns an!
                </div>

                <br/>

                <div>
                    Birgit Brenner
                    <br/>
                    Image . Style . Etikette
                    <br/>
                    <br/>
                    <a href="mailto:consulting@b-brenner.com">consulting@b-brenner.com</a>
                    <br/>
                    <br/>
                    Fon +49 (0) 7131 / 642 60 60
                    <br/>
                    Mobil +49 (0) 177 / 30 30 773
                </div>

            </div>

            <ul>

                <li class="image"><div class="text" style="text-align: left; float:left;"><b>Garderoben Check</b></div><div style="text-align: right; float: right;"><a href="#this" onclick="new Effect.BlindUp('image');">schlie�en</a></div><div style="text-align: right;"><a href="#this" onclick="new Effect.BlindDown('image'); new Effect.BlindUp('umgangskultur');">�ffnen</a></div></li>
            </ul>
            <div id="image" style="display:none;">
                <div>
                    Sie m�chten mit Ihrem eigenen Stil und mit Ihrer eigenen Garderobe einen frischen Wind In IHR Outfit bringen?
                </div>
                <br/>

                <div>
                    Wir nehmen Ihre Garderobe und zeigen Ihnen neue Kombinationsm�glichkeiten,
                    die kleinen Feinheiten, die man durch passende Accessoires schafft und bleiben trotzdem Ihrem Stil gerecht!
                </div>
                <br/>

                <div>
                    Dauer: individuell
                </div>
                <br/>

                <div>
                    Sie m�chten einen pers�nlichen Beratungstermin?
                    <br/>
                    Schreiben Sie uns gleich eine Email oder rufen Sie uns an!
                </div>

                <br/>

                <div>
                    Birgit Brenner
                    <br/>
                    Image . Style . Etikette
                    <br/>
                    <br/>
                    <a href="mailto:consulting@b-brenner.com">consulting@b-brenner.com</a>
                    <br/>
                    <br/>
                    Fon +49 (0) 7131 / 642 60 60
                    <br/>
                    Mobil +49 (0) 177 / 30 30 773
                </div>
            </div>

        </div>
    </div>

</div>

</div>

<?php include("footer.php"); ?>
<div id="footer">

</div>

</body>
</html>