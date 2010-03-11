<?php
    $linkListe = array('business_consulting.php', 'personal_consulting.php', 'termine.php', 'partner.php', 'referenzen.php', 'empfehlungen.php', 'gutschein.php');
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
                            <a href="business_consulting.php"
                               class="<?php $link == 'business_consulting.php' ? print 'active' : print ''; ?>"
                               title="Business Consulting">Business Consulting</a>
                        </li>
                    </ul>

                </div>
            </dd>

            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="personal_consulting.php" class="<?php $link == 'personal_consulting.php' ? print 'active' : print ''; ?>" title="Personal Consulting">Personal Consulting</a>
                        </li>
                    </ul>

                </div>
            </dd>

			<dd>

                <div>
                    <ul>
                        <li>
                            <a href="knigge_kids.php" class="<?php $link == 'knigge_kids.php' ? print 'active' : print ''; ?>" title="Knigge f&uuml;r Kids">Knigge f&uuml;r Kids</a>
                        </li>
                    </ul>

                </div>
            </dd>

            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="termine.php" class="<?php $link == 'termine.php' ? print 'active' : print ''; ?>" title="Offene Seminare">Offene Seminare</a>
                        </li>
                    </ul>

                </div>
            </dd>

            <dd>

                <div>

                    <ul>
                        <li>
                            <a href="presse.php" class="<?php $link == 'presse.php' ? print 'active' : print ''; ?>" title="Presse">Presse</a>
                        </li>
                    </ul>

                </div>
            </dd>

            <!--<dd>

                <div>
                    <ul>
                        <li>
                            <a href="team.php" class="<?php $link == 'team.php' ? print 'active' : print ''; ?>" title="Das Team">Das Team</a>
                        </li>
                    </ul>

                </div>
            </dd>-->

            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="referenzen.php" class="<?php $link == 'referenzen.php' ? print 'active' : print ''; ?>" title="Referenzen">Referenzen</a>
                        </li>
                    </ul>

                </div>
            </dd>
            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="empfehlungen.php" class="<?php $link == 'empfehlungen.php' ? print 'active' : print ''; ?>" title="Empfehlungen">Empfehlungen</a>
                        </li>
                    </ul>

                </div>
            </dd>
            <dd>

                <div>
                    <ul>
                        <li>
                            <a href="downloads.php" class="<?php $link == 'downloads.php' ? print 'active' : print ''; ?>" title="Downloads">Downloads</a>
                        </li>
                    </ul>

                </div>
            </dd>
        </dl>

		<dl>
			<dd class="last">
				<a href="gutschein.php" title="Gutschein" style="border: none;">
					<div style="padding: 5px 5px; margin-top: 10px; text-align: center;">
						<b>Die Geschenkidee!</b>
					</div>
					<img src="../images/gutschein/gutschein.gif" alt="Gutschein" border="0" />
				</a>
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

        <?php
            include ("../counter/phpunity-easycounter.php");
        ?>

    </div>