<?php
	$vornameError = false;
	$nachnameError = false;
	$emailError = false;
	$emailNotValid = false;
	$nachrichtError = false;

	if ($_POST['gesendet'])
	{
		$vorname_gefiltert = filter_input(INPUT_POST, 'vorname');
		$nachname_gefiltert = filter_input(INPUT_POST, 'nachname');
		$email_gefiltert = filter_input(INPUT_POST, 'email');
		$nachricht_gefiltert = filter_input(INPUT_POST, 'nachricht');

		if ( $vorname_gefiltert == "" || is_null($vorname_gefiltert) )
		{
			$vornameError = true;
		}
		if ( $nachname_gefiltert == "" || is_null($nachname_gefiltert) )
		{
			$nachnameError = true;
		}
		if ( $email_gefiltert == "" || is_null($email_gefiltert) )
		{
			$emailError = true;
		}
		else
		{
//			$pos = strpos($_POST['email'], '@');
//			$pos1 = strpos($_POST['email'], '.');
//			if ( $pos === false || $pos1 === false)

        	if(filter_var($email_gefiltert, FILTER_VALIDATE_EMAIL) === FALSE)
			{
				$emailNotValid = true;
			}
		}
		if ( $nachricht_gefiltert == "" || is_null($nachricht_gefiltert) )
		{
			$nachrichtError = true;
		}

		if ($vornameError || $nachnameError || $emailError || $nachrichtError || $emailNotValid)
		{

?>
<br/>
<div style="color: red;">
	Bitte f&uuml;llen Sie alle rot-markierten Felder aus!

<?php
			if($emailNotValid)
			{
?>
	<br/>
	<br/>
	Die E-Mail Adresse '<?php print $email_gefiltert ?>' ist ung&uuml;ltig. Bitte geben Sie eine g&uuml;ltige E-Mail Adresse ein (Bsp.: vorname.nachname@email.de)!
</div>
<?php
			}
			else
			{
				print '</div>';
			}
		}
		else
		{
			$message = "Kontaktanfrage von " . $_POST['vorname'] . " " . $_POST['nachname'] . " (" . $_POST['email'] . ") " . ":\n\n" . $_POST['nachricht'];
			$header = 'From:' . $_POST['email'] . "\r\n" . 'Reply-To:' . $_POST['email'] . "\r\n";

			mail("consulting@b-brenner.com", $formSubject, $message, $header);

?>
<br/>
<div style="color: green;">
	Ihre Anfrage wurde erfolgreich versendet - vielen Dank!
</div>
<?php
		}
	}
?>
<form action="kontakt.php" method="post">
	<p>
		<label class="<?php $vornameError === true ? print 'red' : print ''; ?>">Vorname</label>
		<input name="vorname" type="text" size="30" value="<?php $vorname_gefiltert != '' ? print $vorname_gefiltert : print ''; ?>"/>
		<label class="<?php $nachnameError === true ? print 'red' : print ''; ?>">Name</label>
		<input name="nachname" type="text" size="30" value="<?php $nachname_gefiltert != '' ? print $nachname_gefiltert : print ''; ?>"/>
		<label class="<?php ($emailError === true || $emailNotValid === true) ? print 'red' : print ''; ?>">E-Mail</label>
		<input name="email" type="text" size="30" value="<?php $email_gefiltert != '' ? print $email_gefiltert : print ''; ?>"/>
		<label class="<?php $nachrichtError === true ? print 'red' : print ''; ?>">Kommentar</label>
		<textarea name="nachricht" rows="5" cols="5"><?php $nachricht_gefiltert != '' ? print $nachricht_gefiltert : print ''; ?></textarea>
		<br/>
		<input class="button" name="gesendet" type="submit"/>
	</p>
</form>