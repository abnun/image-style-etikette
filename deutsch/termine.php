<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Seminartermine</title>

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
                Termine
            </h1>

            <hr/>
            <div>
                <br/>
                <b>
                    Gepflegte Umgangsformen f&uuml;r Ihren sicheren Auftritt:
                </b>
                <br/>
                <br/>
                Seminarinhalte:
                <br/>
                Begr&uuml;&szlig;ung, Anrede, Kommunikation,
                <br/>
                Tischsitten und Dress-Code
                <br/>
                <br/>
                <b>
                    "Petite" - das Wesentliche in K&uuml;rze!
                </b>
                <br/>
                Beginn: 20:00 Uhr | Dauer ca. 2,5 Std.
                <br/>
                Seminarort: Tanzschule Brenner, Wilhelmstr. 23 in Heilbronn
                <br/>
                <b>
                    Preis: EUR 69.-
                </b>
                <br/>
                <br/>
                <b>
                    "Grande" - eine genussvolle Herausforderung!
                </b>
                <br/>
                inkl. 3-G&auml;nge-Men&uuml;, ausgew&auml;hlte Weine und Pausengetr&auml;nke
                <br/>
                Beginn: 10:30 Uhr | Dauer ca. 5 Std.
                <br/>
                Seminarort: abh&auml;ngig vom Termin
                <br/>
                <b>
                    Preis: EUR 149.-
                </b>
<!--
				<br />
				<br/>
				<b>
					Knigge f&uuml;r Kids / Kinder-Knigge: kurzweilig - lustig - effektiv
				</b>
				<br/>
				10 Uhr bis 12:30 Uhr
				<br/>
				inkl. Kinderessen und Getr&auml;nk
				<br/>
				min. 6 Teilnehmer, max. 12 Teilnehmer
				<br/>
				in der Tanzschule Brenner, Wilhelmstr. 23 in Heilbronn
				<br/>
				<b>
					Preis: EUR 19.-
				</b>
-->
                <br/>
                <br/>

                <b>
                    "Exclusive"
                </b>
                <br/>
                inkl. 3-G&auml;nge-Men&uuml;, ausgew&auml;hlte Weine und Pausengetr&auml;nke, Teilnehmerunterlagen (geb.Buch) sowie ein Teilnehmerzertifikat
                <br/>
                Beginn: 9:00 Uhr | Ende: 16.00 Uhr
                <br/>
                Seminarort: Ratskeller Heilbronn
                <br/>
                <b>
                    Preis: EUR 179.-
                </b>
                <br/>
                <br/>

				<!--<div>
					<h2 class="ueberschrift2">
						Termine in den Sommerferien
					</h2>

					<table cellpadding="3" cellspacing="0">
						<tr>
							<td style="padding-right: 10px;">
								<b>
									Kids (7-10 Jahre)
								</b>
							</td>
							<td>
								<b>
									Kids (9-12 Jahre)
								</b>
							</td>
						</tr>
						<tr>
							<td style="padding-right: 10px;">
								Mittwoch, 5. August 2009
							</td>
							<td>
								Donnerstag, 6. August 2009
							</td>
						</tr>
						<tr>
							<td style="padding-right: 10px;">
								Dienstag, 11. August 2009
							</td>
							<td>
								Donnerstag, 13. August 2009
							</td>
						</tr>
						<tr>
							<td style="padding-right: 10px;">
								Dienstag, 18. August 2009
							</td>
							<td>
								Mittwoch, 19. August 2009
							</td>
						</tr>
						<tr>
							<td style="padding-right: 10px;">
								Mittwoch, 2. September 2009
							</td>
							<td>
								Mittwoch, 9. September 2009
							</td>
						</tr>
					</table>
				</div>-->
                <h2 class="ueberschrift2">
                    <!--Unsere weiteren -->Termine
                </h2>

                <table cellpadding="3" cellspacing="0">
                    <?php
						$termine = array(
										array('21.01.2010', '"Petite"', 'TS Brenner Heilbronn'),
										array('23.01.2010', '"Grande"', 'Hohly L&ouml;wenstein'),
										array('11.03.2010', '"Test"', 'Hohly L&ouml;wenstein<span style="margin-left: 10px; color: gray;">(Nur noch wenige Pl&auml;tze frei!)</span>'),
										array('18.03.2010', '"Petite"', 'TS Brenner Heilbronn'),
										array('20.03.2010', '"Exclusive"', 'Ratskeller Heilbronn'),
										array('17.04.2010', '"Grande"', 'Ratskeller Heilbronn'),
										array('06.05.2010', '"Petite"', 'TS Brenner Heilbronn'),
										array('08.05.2010', '"Grande"', 'Zum Alten Rentamt Schwaigern'),
										array('17.06.2010', '"Petite"', 'TS Brenner Heilbronn'),
										array('19.06.2010', '"Grande"', 'Hohly L&ouml;wenstein'),
										array('25.09.2010', '"Grande"', 'Ratskeller Heilbronn'),
										array('21.10.2010', '"Petite"', 'TS Brenner Heilbronn'),
										array('23.10.2010', '"Grande"', 'Hohly L&ouml;wenstein'),
										array('25.11.2010', '"Petite"', 'TS Brenner Heilbronn'),
										array('27.11.2010', '"Grande"', 'Ratskeller Heilbronn')
										);

						for($count = 0; $count <= count($termine); $count++)
						{
							$now = date("m.d.Y");
							$termin_datum_check = date("m.d.Y", strtotime($termine[$count][0]));

							$termin_datum = $termine[$count][0];
							$termin_typ = $termine[$count][1];
							$termin_ort = $termine[$count][2];

							if($now < $termin_datum_check)
							{
								include("verschiedenes/_termin.php");
							}
						}
					?>
                </table>

                <br />

                <!--<div>
                    <a href="../downloads/image_style_etikette_flyer.pdf" target="_blank"
                       title="image . style . etikette - Seminar-Flyer">
                        <img src="../images/icons/pdf_icon.gif" alt="image . style . etikette - Seminar-Flyer"
                             border="0"/>
                        Aktueller Seminar-Flyer
                    </a>

                </div>-->

                <!--<br />
                <i><b>Weitere Termine f&uuml;r 2009 folgen in K&uuml;rze!</b></i>-->

            </div>

        </div>
    </div>

</div>

</div>

<?php include("verschiedenes/_analytics.php"); ?>
</body>
</html>
