<?php
############################################################################
#
# (c) 	Markus Wolf, 1998-2006  |  info@interaktiv.net
#       iAn interAKTIVnet GmbH  |  http://www.interaktiv.net
#       Tel. 07031-714740       |  Fax. 07031-714744
#
############################################################################
#
#  Diese Software ist das Eigentum der iAn interAKTIVnet GmbH und nach dem 
#  Urheberrecht gesch�tzt - es  handelt sich NICHT um Freeware. Jede Nutzung 
#  der Software ohne eine g�ltige Lizenzvereinbarung, wird zivil- und 
#  strafrechtlich verfolgt.
#
#  This Software is the property of iAn interAKTIVnet GmbH and is protected 
#  by copyright law - it is NOT Freeware. Any unauthorized use of this 
#  software without a valid license is a violation of the license agreement 
#  and will be prosecuted by civil and criminal law.
#
#  Dieses Script darf von jedermann kostenlos benutzt und ge�ndert werden, 
#  solange dieser Copyright-Verweis, der Link bei der Ausgabe und die 
#  restlichen Kommentare erhalten  bleiben. Mit dem Einsatz dieses Skripts 
#  akzeptieren Sie, da� die interAKTIVnet GmbH von jeglicher Haftung und 
#  Gew�hrleistung hinsichtlich des Einsatzes befreit ist.
#
#  Weitere Infos : http://www.phpunity.de/php/scripts/
# 
#  Der Verkauf dieses Skripts, auch in modifizierter Form, ist ohne
#  vorherige Absprache ausdr�cklich untersagt.
# 
#  Um dieses Skript �ber das Internet oder irgendein anderes Medium
#  weiterzuverbreiten, ben�tigen Sie vorher meine Erlaubnis. In jeden Fall
#  m�ssen der Copyright-Verweis und die restlichen Kommentare erhalten 
#  bleiben.
#
############################################################################
#
#  PHPUNITY.DE : phpunity.easycounter
#
############################################################################


############################################################################
# Konfiguration
############################################################################


// Anzahl der anzuzeigenden Stellen des Z�hlers
$digits = 100 ;  				

// Nummer des Ordners, in dem sich die Z�hlergrafiken befinden (bei grafischem Z�hler)
$dfolder = 4 ;				

// Hintergrundfarbe des Z�hlers (bei Textanzeige)
$bgcolor = "#ff9900" ;		

// Schriftart des Z�hlers (bei Textanzeige)
$font = "verdana" ;			

// Schriftfrabe des Z�hlers (bei Textanzeige)
$font_color = "#000000" ;	

// Schriftart dick = "<b>" | Schriftart d�nn = ""
$font_weight = "<b>" ;		

// Schriftgr��e des Z�hlers (bei Textanzeige)
$font_size = 2 ;				

// Reload-Sperre (IP-Sperre) in Minuten
$ip_time = 30 ; 

// Anzeigeart: text = Text | image = Grafisch | none = keine Anzeige
$cdisp = "none" ;			

// F�r die Anzeigeart 'image' muss der Pfad zum Ordner
// "phpunity-easycounter", wie folgendes Beispiel zeigt,
// angegeben werden. 
// z.B. $counter_path = 'http://www.ihredomain.de/phpunity-easycounter';
// oder $counter_path = 'http://www.ihredomain.de/pfad-zum-ordner/phpunity-easycounter';

$counter_path = './phpunity-easycounter';



############################################################################
# Programmablauf (ab hier mu� nichts ge�ndert werden)
############################################################################


$file_path = dirname(__FILE__).'/';
$count_dat = $file_path.'data/counter.txt';
$rem_adr   = $_SERVER['REMOTE_ADDR'];

$ifolder=$counter_path; $ifolder.="/images";


###
#IP-Adresse pr�fen

$ip_alarm = CounterCheckIp($rem_adr, $ip_time, $file_path);

if ($ip_alarm==1) {

	$nummer = file($count_dat);
	$nummer_neu = $nummer[0];

} else {

	#Counterfile �berpr�fen und ggf. anlegen
	if (!file_exists($count_dat)) {
	
		$zahldatei = fopen($count_dat,"w+");
		$nummer_neu = 1;
		fwrite($zahldatei, $nummer_neu);
		fclose($zahldatei);
	
	} else {
	
		#Zahl im Counter wird um 1 erh�ht und in die Datei geschrieben
		$nummer = file($count_dat);
		$nummer_neu = $nummer[0];
		$zahldatei = fopen($count_dat,"r+");
		$nummer_neu++;
		fwrite($zahldatei, $nummer_neu);
		fclose($zahldatei);
	}
}


###
#Counteranzeige 

$ausgabe = "" ;

if ( $cdisp == 'text' ) {
	
	#als Text
	$counter = sprintf("%0"."$digits"."d",$nummer_neu) ;
	$ausgabe = "<span style=\"background-color:$bgcolor\"><font face=$font size=$font_size color=$font_color>$font_weight$counter$font_weight</font></span>" ;

} else if ( $cdisp == 'image' ) {

	#Counteranzeige mit Grafiken	
	$count = sprintf("%0"."$digits"."d",$nummer_neu);

	#Ziffern ausgeben	
	for ( $i=0 ; $i<$digits ; $i++ ) {
		$ausgabe .= "<img src = '$ifolder/$dfolder/$count[$i].gif'>";
	}
} 


###
#Ausgabe

echo $ausgabe ;



############################################################################
# IP-Adresse checken
############################################################################

function CounterCheckIp($senders_ip, $ip_time, $file_path) {


$ip_dat    = $file_path."data/iplock/".$senders_ip;
$now_date  = date("U");
$ip_alarm  = 0 ;


###
#alte ip-files l�schen

$ip_folder = opendir($file_path."data/iplock");
while ($datfile = readdir($ip_folder)) {

    if (preg_match("=.*=", $datfile)) {

		$dat_date  = date("U", filectime($file_path."data/iplock/$datfile"));
		$keep_time = 60 * $ip_time;
		$dif_time  = $now_date - $keep_time;

		if ($dat_date < $dif_time) {
		    @unlink($file_path."data/iplock/$datfile");
		}
	}

} closedir($ip_folder);


###
#IP pr�fen

if (file_exists("$ip_dat")) {

	$ip_alarm = 1 ;
	
} else {

	$ip_file = fopen("$ip_dat","w+");
	fclose ($ip_file); 
}


###
#R�ckgabe Auswertung

return ($ip_alarm);


} 



############################################################################
# ENDE
############################################################################
?>
