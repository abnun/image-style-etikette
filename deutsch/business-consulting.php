<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Knigge Training | Business Etikette | Business Consulting | Interkulturelle Kommunikation</title>

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
                Business Consulting
            </h1>
            <hr/>

            <div>
                Klicken Sie auf einen der Unterpunkte, um diesen auf- oder zuzuklappen.
            </div>

            <ul>

                <li class="unterpunkt1" title="Business Etikette">
                    <div class="text" style="text-align: left; float:left;">
                        <a id="unterpunkt1Link" href="#this">
                            <h2>Business Etikette</h2>
							<span style="font-size: xx-small;">&nbsp;(mehr ...)</span>
                        </a>
                    </div>
                    <div style="text-align: right;">
                        <a id="unterpunkt1CloseLink" href="#this">
							&nbsp;
                        </a>
                    </div>
                </li>
            </ul>
            <div id="unterpunkt1" style="display: none;">

				<table cellpadding="0" cellspacing="0" border="0">
					<colgroup>
						<col width="*">
						<col width="100">
					</colgroup>
					<tr>
                        <td valign="top">

							<div>
								Gepflegte Umgangsformen geh&ouml;ren heute mehr denn je zum guten Ton der Gesellschaft - besonders aber im Business und speziell im Kundenkontakt.
							</div>

							<div>
								Wir stellen Ihnen ein Inhouse-Seminar ganz nach Ihren Anforderungen zusammen: Intensiv-Training (individuelle Dauer) / Kundenveranstaltung / Incentive / Betriebsfeier
							</div>

							<br/>

                            <div>
                                Auszug Seminarthemen:
                            </div>

                            <div>
                                "Ihr Auftritt" - der erste Eindruck
                                <br/>
                                Empfang von Gesch&auml;ftspartnern
                                <br/>
                                Vorstellen und Begr&uuml;&szlig;en
                                <br/>
                                Kommunikation - verbal und non-verbal
                                <br/>
                                Tischkultur, der gute Ton im Restaurant
                                <br/>
                                Outfit passend zum Anlass
                                <br/>
                                Business-Dress-Code
                                <br/>
                                Stil und Etikette
                                <br/>
                                K&ouml;rpersprache und Distanzzonen
                                <br/>
                                Telefon-Knigge
                                <br/>
                                Was ist aktuell, was ist veraltet?
                            </div>

							<br/>

							<div>
								Sie m&ouml;chten gerne ein Angebot, auf Ihre Firma zugeschnitten?
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
								<img src="../images/business-consulting/business-consulting-etikette-bild-1.jpg" alt="Birgit Brenner | Business Consulting" style="margin: 0px 10px;" />
								<br />
								<img src="../images/business-consulting/business-consulting-etikette-bild-2.jpg" alt="Birgit Brenner | Business Consulting" style="margin: 0px 10px;" />
								<br />
								<img src="../images/business-consulting/business-consulting-etikette-bild-3.jpg" alt="Birgit Brenner | Business Consulting" style="margin: 0px 10px;" />
							</div>
                            <!--<img src="../images/Gedeck3.jpg" alt=""/>-->
                        </td>
                    </tr>
                </table>

            </div>

            <ul>

                <li class="unterpunkt2" title="Interkulturelle Kommunikation">
                    <div class="text" style="text-align: left; float:left;">
                        <a id="unterpunkt2Link" href="#this">
							<h2>Interkulturelle Kommunikation</h2>
							<span style="font-size: xx-small;">&nbsp;(mehr ...)</span>
                        </a>
                    </div>
                    <div style="text-align: right;">
                        <a href="#this" id="unterpunkt2CloseLink">
                            &nbsp;
                        </a>
                    </div>
                </li>            </ul>
            <div id="unterpunkt2" style="display: none;">

				<table cellpadding="0" cellspacing="0" border="0">
					<colgroup>
						<col width="*">
						<col width="100">
					</colgroup>
                    <tr>
                        <td>

							<div>
								<br/>
								Andere L&auml;nder - Andere Sitten!
							</div>


							<div>
								Fremde Kulturen m&uuml;ssen nicht "fremd" bleiben!
							</div>

							<div>
							   Es geht nicht darum, sich komplett den "anderen" Sitten zu unterwerfen, sondern sie zu kennen, sie zu akzeptieren und vor allem sie zu respektieren.
							</div>


							<div>
							   Das gewisse Know-how eines Landes verschafft Ihnen Anerkennung und Souver&auml;nit&auml;t im Umgang mit der jeweiligen Kultur. Gerade im  Business ist es enorm wichtig seinen "Gegen&uuml;ber" einsch&auml;tzen zu k&ouml;nnen.
							</div>

							<div>
								Wir stellen Ihnen ein Inhouse-Seminar ganz nach Ihren Anforderungen zusammen!
								Alle Seminare bieten wir auf deutsch oder englisch an.
							</div>

							<br/>

                            <div>
                                Auszug Seminarthemen:
                            </div>

                            <div>
                                Kulturelle Gepflogenheiten
                                <br/>
                                Einladung und Gastgeschenke
                                <br/>
                                P&uuml;nktlichkeit
                                <br/>
                                Dress-Code und Farben
                                <br/>
                                Visitenkarten
                                <br/>
                                Esskultur
                                <br/>
                                K&ouml;rpersprache und Distanzzonen
                                <br/>
                                Kommunikation - verbal oder non-verbal
                                <br/>
                                Tabus und Fettn&auml;pfchen
                            </div>

                        </td>
                        <td valign="top">
							<div>
								<img src="../images/business-consulting/business-consulting-interkulturelle-kommunikation.jpg" alt="Birgit Brenner | Business Consulting | Interkulturelle Kommunikation" style="margin: 0px 10px;" />
							</div>
                        </td>
                    </tr>
                </table>

                  <br />
                  <div>
                    Leben in der anderen Kultur - Individuelle Beratung f&uuml;r Im- und Expatriates
                  </div>
                  <br/>
                   
                <div>
                    Sie m&ouml;chten gerne ein Angebot auf Ihre Firma zugeschnitten?
                </div>
                   
                <div>
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
            </div>

        </div>
    </div>

</div>

</div>

<?php include("seitenaufbau/_footer.php"); ?>

<?php include("verschiedenes/_analytics.php"); ?>
<?php include("verschiedenes/_highslide_imports.php"); ?>
</body>
</html>