<?php

$errors = [];

	//Verification des données du formulaire

	if(!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)))
	{
		$errors['email'] = "- vous n'avez pas saisie une adresse mail valide.";
	}

	if(!array_key_exists('objet', $_POST) || $_POST['objet'] == '')
	{
		$errors['suejt'] = "- vous n'avez pas saisie d'objet'.";
	}

	if(!array_key_exists('message', $_POST) || $_POST['message'] == '')
	{
		$errors['message'] = "- vous n'avez pas saisie de message.";
	}

	session_start();

	//S'il y a des erreurs, on redirige vers la page d'acceuil

	if(!empty($errors))
	{
		$_SESSION['errors'] = $errors;
		$_SESSION['inputs'] = $_POST;
		header('Location: index.php');
	}

	//S'il y n'a pas d'erreurs, on enregistre dans la base de donnée et on traite le mail

	else

	//Enregistrement dans la base de données en vue de proposer l'adhésion à une prochaine newsletter

	try
	{
		$bdd = new PDO('mysql:host=#;dbname=#','#','#');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
	$req = $bdd->prepare('INSERT INTO mail(mail, objet, message) VALUES (?, ?, ?)');
	$req->execute(array($_POST['mail'], $_POST['objet'], $_POST['message']));

	//Traitements des emails

	$destinataire = 'contact@david-perezacimovic.fr';
	$expediteur   = $_POST['mail'];
	$reponse = "Bonjour,\n\n J'ai bien reçu votre message, je le traite dans les plus brefs délais.\n\n A bientôt,\n\nDavid Perez-Acimovic";

	//Envoie du mail de l'emmeteur vers ma boite mail

	mail($destinataire, $_POST['objet'], $_POST['message'], "From: $expediteur\r\nReply-To: $expediteur");

	//Envoie d'un mail de confirmation à l'émetteur

	mail ($_POST['mail'], 'Contact David Perez-Acimovic', $reponse,"From: contact@david-perezacimovic.fr\r\nReply-To: contact@david-perezacimovic.fr");

	$_SESSION['success'] = 1;

	header('Location: index.php');
?>