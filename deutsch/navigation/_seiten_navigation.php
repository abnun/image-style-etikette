<?php
    $linkListe = array('business-consulting.php', 'personal-consulting.php', 'termine.php', 'partner.php', 'referenzen.php', 'empfehlungen.php', 'gutschein.php');
    $quotes = array('Nur wer sich &auml;ndert, bleibt sich treu.<div style="font-size:smaller;">(Wolf Biermann)</div>',
            'Jeder Mensch macht Fehler. Das Kunstst&uuml;ck liegt darin, sie dann zu machen, wenn keiner zuschaut.<div style="font-size:smaller;">(Peter Ustinov)</div>',
            'Ein L&auml;cheln ist die k&uuml;rzeste Entfernung zwischen zwei Menschen.<div style="font-size:smaller;">(Victor Borge)</div>',
            'Mode ist ohne pers&ouml;nlichen Stil bedeutungslos.<div style="font-size:smaller;">(Coco Chanel)</div>',
            'Sei, was du bist, immer ganz und immer derselbe.<div style="font-size:smaller;">(Adolph Freiherr von Knigge)</div>');
    $zufall1 = rand(1, count($quotes) - 1);
//    $zufall2 = rand();
?>
        <div id="sidebar">

        <dl>


            <dd class="first">

                <div>

                    <ul>
                        <li>
                            <a href="/deutsch/business-consulting.php"
                               class="<?php $link == 'business-consulting.php' ? print 'active' : print ''; ?>"
                               title="Birgit Brenner | Business Etikette | Business Consulting | Interkulturelle Kommunikation">Business Consulting</a>
                        </li>
                    </ul>

                </div>
            </dd>

            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="/deutsch/personal-consulting.php" class="<?php $link == 'personal-consulting.php' ? print 'active' : print ''; ?>" title="Birgit Brenner | Personal Consulting | Personal Shopping | Garderoben Check">Personal Consulting</a>
                        </li>
                    </ul>

                </div>
            </dd>

			<dd>

                <div>
                    <ul>
                        <li>
                            <a href="/deutsch/knigge-kids.php" class="<?php $link == 'knigge-kids.php' ? print 'active' : print ''; ?>" title="Birgit Brenner | Knigge f&uuml;r Kids | Kinder-Knigge | Knigge f&uuml;r Jugendliche">Knigge f&uuml;r Kids</a>
                        </li>
                    </ul>

                </div>
            </dd>

            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="/deutsch/termine.php" class="<?php $link == 'termine.php' ? print 'active' : print ''; ?>" title="Birgit Brenner | Offene Seminare | Seminartermine">Offene Seminare</a>
                        </li>
                    </ul>

                </div>
            </dd>

            <dd>

                <div>

                    <ul>
                        <li>
                            <a href="/deutsch/presse-knigge-tipps.php" class="<?php $link == 'presse-knigge-tipps.php' ? print 'active' : print ''; ?>" title="Birgit Brenner | Presseberichte | Knigge-Tipps">Presse</a>
                        </li>
                    </ul>

                </div>
            </dd>

            <!--<dd>

                <div>
                    <ul>
                        <li>
                            <a href="team.php" class="<?php //$link == 'team.php' ? print 'active' : print ''; ?>" title="Das Team">Das Team</a>
                        </li>
                    </ul>

                </div>
            </dd>-->

            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="/deutsch/referenzen.php" class="<?php $link == 'referenzen.php' ? print 'active' : print ''; ?>" title="Birgit Brenner | Unsere Referenzen">Referenzen</a>
                        </li>
                    </ul>

                </div>
            </dd>
            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="/deutsch/empfehlungen.php" class="<?php $link == 'empfehlungen.php' ? print 'active' : print ''; ?>" title="Birgit Brenner | Empfehlungen unserer Kunden">Empfehlungen</a>
                        </li>
                    </ul>

                </div>
            </dd>
            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="/deutsch/downloads.php" class="<?php $link == 'downloads.php' ? print 'active' : print ''; ?>" title="Birgit Brenner | Downloads">Downloads</a>
                        </li>
                    </ul>

                </div>
            </dd>
        </dl>

		<dl>
			<dd class="last">
				<a href="/deutsch/gutschein.php" title="Gutschein" style="border: none;">
					<div style="padding: 5px 5px; margin-top: 10px; text-align: center;">
						<b>Die Geschenkidee<!-- zu Weihnachten-->!</b>
					</div>
					<img src="../../images/gutschein/birgit-brenner-knigge-gutschein.gif" alt="Gutschein" border="0" style="position: relative;" />
				</a>
			</dd>
		</dl>

		<dl>
			<dd class="last">
				<div style="padding: 5px 5px; margin-top: 10px; text-align: center;">
					<img src="../../images/ihk/ihk-logo.gif" alt="IHK Logo" border="0" />
				</div>
			</dd>
		</dl>

        <dl>

            <blockquote>
                <?php
                    print $quotes[$zufall1];
                ?>
            </blockquote>

        </dl>

        <!--<dl class="last">

            <dd>
                <div style="padding: 5px 0px 10px 0px;">
                    Birgit Brenner zu Gast bei:
                </div>
                <img src="../images/nachtcafe.jpg" alt="Fernsehen"/>
            </dd>

        </dl>
        <dl>

            <dd class="last">
                <div style="padding: 5px 0px 10px 5px;">
                    Birgit Brenner ist:
                </div>
                <img src="../images/partner/stempel_klein.jpg" alt="Knigge Akademie"/>
            </dd>

        </dl>-->

        <?php /*include ("../counter/phpunity-easycounter.php"); */?>

    </div>