<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Personal Consulting</title>

    <?php include("verschiedenes/_head_metatags.php"); ?>

    <link rel="stylesheet" type="text/css" media="screen, print" href="/style/style.css"/>

    <script src="../javascript/jquery-1.2.6.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function()
		{
			//$("#unterpunkt1").slideUp("slow");
			//$("#unterpunkt2").slideUp("slow");
			
			$("#unterpunkt1Link").click(function()
			{
				if ($("#unterpunkt1").is(":hidden"))
				{
					if($("#unterpunkt2").is(":visible"))
					{
						$("#unterpunkt2").slideUp("slow");
						$("#unterpunkt2CloseLink").html("&nbsp;");
					}
					$("#unterpunkt1").slideDown("slow");
					$("#unterpunkt1CloseLink").html("X&nbsp;&nbsp;");
				}
				else
				{
					$("#unterpunkt1").slideUp("slow");
					$("#unterpunkt1CloseLink").html("&nbsp;");
				}
			});

			$("#unterpunkt2Link").click(function()
			{
				if ($("#unterpunkt2").is(":hidden"))
				{
					if($("#unterpunkt1").is(":visible"))
					{
						$("#unterpunkt1").slideUp("slow");
						$("#unterpunkt1CloseLink").html("&nbsp;");
					}
					$("#unterpunkt2").slideDown("slow");
					$("#unterpunkt2CloseLink").html("X&nbsp;&nbsp;");
				}
				else
				{
					$("#unterpunkt2").slideUp("slow");
					$("#unterpunkt2CloseLink").html("&nbsp;");
				}
			});
			$("#unterpunkt1CloseLink").click(function()
			{
				if($("#unterpunkt1").is(":visible"))
				{
					$("#unterpunkt1").slideUp("slow");
					$("#unterpunkt1CloseLink").html("&nbsp;");
				}
			});
			$("#unterpunkt2CloseLink").click(function()
			{
				if($("#unterpunkt2").is(":visible"))
				{
					$("#unterpunkt2").slideUp("slow");
					$("#unterpunkt2CloseLink").html("&nbsp;");
				}
			});
		});
	</script>

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
                Personal Consulting
            </h1>
            <hr/>

            <div>
                Klicken Sie auf einen der Unterpunkte, um diesen auf- oder zuzuklappen.
            </div>

            <ul>

                <li class="unterpunkt1" title="Personal Shopping">
                    <div class="text" style="text-align: left; float:left;">
                        <a id="unterpunkt1Link" href="#this">
                            Personal Shopping
                        </a>
                    </div>
                    <div style="text-align: right;">
                        <a href="#this" id="unterpunkt1CloseLink">
                            &nbsp;
                        </a>
                    </div>
                </li>
            </ul>
            <div id="unterpunkt1" style="display: none;">
				<table cellspacing="0" cellpadding="0" border="0">
					<colgroup>
						<col width="*">
						<col width="100">
					</colgroup>
                	<tr>
                		<td>

                			<div>
								Sie wollen Ihren individuellen Kleidungsstil entwickeln oder verfeinern?
								<br/>
								Sie wollen eine Basic-Garderobe zum vielf&auml;ltigen kombinieren?
								<br/>
								Oder einfach ein neues Komplett-Outfit f&uuml;r die kommende Saison?
							</div>
							
							<div>
								Sie stehen bei uns im Mittelpunkt!
								Wir sind Ihre stilsichere Shopping-Begleitung!

								Erleben Sie einen Tag des Shoppings ohne Gleichen!
								Keine Suche nach passenden Gesch&auml;ften, Marken oder Ihrer eigenen Stilrichtung. Wir bringen Sie zielstrebig mit unserem stilsicheren Auge
								zu Ihrer neuen Kleidung!

							</div>

							<div>
								Voraussetzung: Sie gew&auml;hren uns einen Blick in Ihren Kleiderschrank!
							</div>

							<div>
								Ziel: Wir verleihen Ihnen das feine Gesp&uuml;r f&uuml;r Ihren Stil!
							</div>

							<br/>

							<div>
								Sie m&ouml;chten einen pers&ouml;nlichen Beratungstermin?
								<br/>
								Schreiben Sie uns gleich eine Email oder rufen Sie uns an!
							</div>

                		</td>
                		<td valign="top">
							<div>
								<img src="../images/personal-consulting/personal-consulting-bild-schuhe.jpg" alt="Birgit Brenner | Personal Shopping" style="margin: 0px 10px;" />
							</div>

                		</td>
                	</tr>
                </table>

                <br/>

                <div>
                    Ihre
                    <br/>
                    Birgit Brenner
                    <br/>
                    image . style . etikette
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

                <li class="unterpunkt2" title="Garderoben Check">
                    <div class="text" style="text-align: left; float:left;">
                        <a id="unterpunkt2Link" href="#this">
                            Garderoben Check
                        </a>
                    </div>
                    <div style="text-align: right;">
                        <a href="#this" id="unterpunkt2CloseLink">
                            &nbsp;
                        </a>
                    </div>
                </li>            </ul>
            <div id="unterpunkt2" style="display: none;">

                <table cellspacing="0" cellpadding="0" border="0">
					<colgroup>
						<col width="*">
						<col width="100">
					</colgroup>
                	<tr>
                		<td valign="top">

        					<div>
								Sie m&ouml;chten mit Ihrem eigenen Stil und mit Ihrer eigenen Garderobe einen frischen Wind In IHR Outfit bringen?
							</div>

							<div>
								Wir nehmen Ihre Garderobe und zeigen Ihnen neue Kombinationsm&ouml;glichkeiten,
								die kleinen Feinheiten, die man durch passende Accessoires schafft und bleiben trotzdem Ihrem Stil gerecht!
							</div>

							<div>
								Dauer: individuell
							</div>
							<br/>

							<div>
								Sie m&ouml;chten einen pers&ouml;nlichen Beratungstermin?
								<br/>
								Schreiben Sie uns gleich eine Email oder rufen Sie uns an!
							</div>

                            <br/>

                            <div>
                                Ihre
                                <br/>
                                Birgit Brenner
                                <br/>
                                image . style . etikette
                                <br/>
                                <br/>
                                <a href="mailto:consulting@b-brenner.com">consulting@b-brenner.com</a>
                                <br/>
                                <br/>
                                Fon +49 (0) 7131 / 642 60 60
                                <br/>
                                Mobil +49 (0) 177 / 30 30 773
                            </div>

                		</td>
                		<td valign="top">
							<div>
        						<img src="../images/personal-consulting/personal-consulting-bild-garderobencheck.jpg" alt="Garderoben Check" style="margin: 0px 10px;" />
							</div>
							<!--<br />
														<img src="../images/personal_consulting/Garderobencheck_2.jpg" alt="Garderoben Check" style="margin: 0px 10px;" />-->

                		</td>
					</tr>
				</table>

        	</div>
        </div>
    </div>

</div>

</div>

<?php include("verschiedenes/_analytics.php"); ?>
</body>
</html>