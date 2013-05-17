<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Birgit Brenner | Image. Style. Etikette | Knigge Training | Business Etikette | Seminartermine</title>

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
                Beginn: 10:00 Uhr | Dauer ca. 5 Std.
                <br/>
                Seminarort: abh&auml;ngig vom Termin
                <br/>
                <b>
                    Preis: EUR 179.-
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
                <!--<br/>
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
                    Preis: EUR 198.-
                </b>-->
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
					array('09.03.2013', '"Grande"', 'Gasthof Hohly L&ouml;wenstein'),
					array('11.03.2013', '"Petite"', 'Tanzschule Brenner Heilbronn'),
					array('13.04.2013', '"Grande"', 'Ratskeller Heilbronn'),
					array('22.04.2013', '"Petite"', 'Tanzschule Brenner Heilbronn'),
					array('13.05.2013', '"Petite"', 'Tanzschule Brenner Heilbronn'),
					array('08.06.2013', '"Grande"', 'Ratskeller Heilbronn'),
					array('10.06.2013', '"Petite"', 'Tanzschule Brenner Heilbronn'),
					array('06.07.2013', '"Grande"', 'Gasthof Hohly L&ouml;wenstein'),
					array('08.07.2013', '"Petite"', 'Tanzschule Brenner Heilbronn')
					/*array('22.09.2012', '"Knigge f&uuml;r Kids"', 'Gasthof Hohly L&ouml;wenstein'),*/
					/*array('29.09.2012', '"Knigge f&uuml;r Jugendliche"', 'Ratskeller Heilbronn'),*/
					/*array('06.10.2012', '"Grande"', 'Gasthof Hohly L&ouml;wenstein'),
					array('25.10.2012', '"Petite"', 'Tanzschule Brenner Heilbronn'),
					array('01.12.2012', '"Grande"', 'Ratskeller Heilbronn'),
					array('13.12.2012', '"Petite"', 'Tanzschule Brenner Heilbronn')*/
							/*array('15.03.2012', '"Flirt-Knigge"', 'Winery Heilbronn'),
							array('12.04.2012', '"Flirt-Knigge"', 'Tanzschule Brenner Heilbronn'),
							array('21.04.2012', '"Grande"', 'Ratskeller Heilbronn'),
							array('23.04.2012', '"Petite"', 'Tanzschule Brenner Heilbronn'),
							array('12.05.2012', '"Grande"', 'Gasthof Hohly L&ouml;wenstein'),
							array('14.05.2012', '"Petite"', 'Tanzschule Brenner Heilbronn'),
							array('24.05.2012', '"Flirt-Knigge"', 'Zentrum f&uuml;r Naturheilkunde Heilbronn'),
							array('14.06.2012', '"Petite"', 'Tanzschule Brenner Heilbronn'),
							array('16.06.2012', '"Gala Lunch" f&uuml;r Jugendliche', 'Ratskeller Heilbronn'),
							array('09.07.2012', '"Petite"', 'Tanzschule Brenner Heilbronn'),
							array('14.07.2012', '"Grande"', 'Gasthof Hohly L&ouml;wenstein')*/
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

				<h2 class="ueberschrift2">
					Jetzt auch in China (Peking)!
					<br />
					<span style="font-size: 10px;">
						 - In Zusammenarbeit mit der "Knigge Akademie China" -
					</span>
				</h2>

				<br />
				<b>"Knigge f&uuml;r Kids"</b> und
				<b>"Personal Image Consulting"</b>
				<br />
				<h2 class="ueberschrift2">Termine:</h2>

				<table cellpadding="3" cellspacing="0">
					<tr>
						<!--<td style="padding-right: 20px;">
							16.-24.07.2012 in Peking (China)
						</td>
					</tr>
					<tr>
						<td style="padding-right: 20px;">
							06.-14.08.2012 in Peking (China)
						</td>-->
						<td colspan="2" style="padding-right: 20px;">
							Termine 2013 werden noch bekannt gegeben.
						</td>
					</tr>
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

                <br />
                <!--<i><b>Weitere Termine f&uuml;r 2009 folgen in K&uuml;rze!</b></i>-->

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
