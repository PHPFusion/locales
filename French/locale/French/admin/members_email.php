<?php
$locale['email_create_subject'] = "Compte réactivé sur [SITENAME]";
$locale['email_create_message'] = "Bonjour [USER_NAME],<br/>
Votre compte sur [SITENAME] a été créé.<br/>Vous pouvez maintenant vous connecter en utilisant les données suivantes :<br/>
Nom d'utilisateur : [USER_NAME]<br/>Mot de passe : [PASSWORD]<br/>Cordialement,<br/>[SITEUSERNAME]";

$locale['email_activate_subject'] = "Compte activé sur [SITENAME]";
$locale['email_activate_message'] = "Bonjour [USER_NAME],<br/>Votre compte sur [SITENAME] a été activé.<br/>
Vous pouvez maintenant vous connecter en utilisant le nom d'utilisateur et le mot de passe que vous avez choisis.<br/>Cordialement,<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "La réactivation du compte est requise sur [SITENAME]";
$locale['email_deactivate_message'] = "Bonjour [USER_NAME],<br/>Cela fait [DEACTIVATION_PERIOD] jour(s) que vous vous êtes connecté(e) pour la dernière fois sur [SITENAME]. Votre compte utilisateur a été marqué comme inactif, mais tous les détails et le contenu de votre compte restent intacts.<br/>
Pour réactiver votre compte, cliquez simplement sur le lien suivant : [REACTIVATION_LINK]<br/>Cordialement,<br/>[SITEUSERNAME]";

$locale['email_ban_subject'] = "Votre compte sur [SITENAME] a été banni";
$locale['email_ban_message'] = "Bonjour, [USER_NAME],<br/>Votre compte sur [SITENAME] a été banni par [ADMIN_USERNAME] pour la raison suivante :<br/>
[REASON]<br/>Si vous souhaitez plus d'informations sur ce ban, SVP, contactez l'administrateur du site à [SITENAME].<br/>Cordialement<br/>[SITEUSERNAME]";

$locale['email_secban_subject'] = "Votre compte sur [SITENAME] a été banni";
$locale['email_secban_message'] = "Bonjour [USER_NAME]<br/>Votre compte sur [SITENAME] a été banni par [ADMIN_USERNAME] en raison de certaines actions accréditées à votre compte ou liées à votre compte ont été considérées comme une menace de sécurité pour le site.<br/>
Si vous voulez plus d'informations sur ce bannissement de sécurité, veuillez contacter l'administrateur du site à [SITENAME].<br/>Cordialement,<br/>[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Votre compte sur [SITENAME] a été suspendu";
$locale['email_suspend_message'] = "Bonjour [USER_NAME],<br/>
Votre compte sur [SITENAME] a été suspendu par [ADMIN_USERNAME] jusqu'à [DATE] (heure du site) pour la raison suivante :<br/>
[REASON]<br/>Si vous voulez plus d'informations sur cette suspension, veuillez contacter l'administrateur du site à [SITENAME].<br/>Cordialement,<br/>[SITEUSERNAME]";

$locale['email_resend_subject'] = "Lien d'activation renvoyé - [SITENAME]";
$locale['email_resend_message'] = "Bonjour [USER_NAME],<br/>
Vous avez reçu cet e-mail car vous n'avez pas activé l'e-mail sur notre site - [SITENAME].<br/>Si vous n'activez pas d'e-mail dans un délai d'un jour, votre demande d'inscription sera annulée.<br/>
Vous vous êtes enregistré avec les informations suivantes :<br/>Nom d'utilisateur : [USER_NAME]<br/>
Vous pouvez activer votre compte avec le lien suivant :<br/>[ACTIVATION_LINK]<br/>Cordialement,<br/>[SITENAME]";
