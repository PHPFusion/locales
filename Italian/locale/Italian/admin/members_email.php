<?php
$locale['email_create_subject'] = "Account creato a [SITENAME]";
$locale['email_create_message'] = "Hello [USER_NAME],

È stato creato il tuo account a [SITENAME].
Tu adesso puoi accedere utilizzando i seguenti dettagli:

nome utente: [USER_NAME]

password: [PASSWORD]

Regards,
[SITEUSERNAME] ";

$locale['email_activate_subject'] = "Account attivato a [SITENAME]";
$locale['email_activate_message'] = "Ciao [USER_NAME],
Your conto a [SITENAME] è stato attivato.

Ora è possibile effettuare il login utilizzando il tuo nome utente scelto e password.

Regards,
[SITEUSERNAME] ";

$locale['email_deactivate_subject'] = "Necessaria a [SITENAME] la riattivazione dell'Account";
$locale['email_deactivate_message'] = "Ciao [USER_NAME], 
It è stato il [DEACTIVATION_PERIOD] negli ultimi giorni dopo l'ultimo accesso a [SITENAME]. Il tuo utente è stato contrassegnato come inattivo ma tutti i tuoi dati account e resti contenuto intact.


Per riattivare il tuo account, clicca il link seguente: 

Regards,
[REACTIVATION_LINK] [SITEUSERNAME] ";

$locale['email_ban_subject'] = "il tuo account su [SITENAME] è stato bannato";
$locale['email_ban_message'] = "Ciao [USER_NAME],
Your account su [SITENAME] è stato vietato da [ADMIN_USERNAME] a causa del seguente motivo:

[REASON]
If si desiderano ulteriori informazioni su questo divieto, si prega di contattare l'amministratore del sito a [SITENAME].

Regards,
[SITEUSERNAME] ";

$locale['email_secban_subject'] = "il tuo account su [SITENAME] è stato bannato";
$locale['email_secban_message'] = "Ciao [USER_NAME],
Your account su [SITENAME] è stato vietato da [ADMIN_USERNAME] a causa di alcune azioni accreditati a voi o collegato al tuo account sono state considerate una minaccia per la sicurezza per il sito.

Se volete maggiori informazioni su questo divieto di sicurezza, si prega di contattare l'amministratore del sito a [SITENAME].

Regards,
[SITEUSERNAME] ";

$locale['email_suspend_subject'] = "il tuo account su [SITENAME] è stato sospeso";
$locale['email_suspend_message'] = "Hello [USER_NAME],

Il tuo account su [SITENAME] è stato sospeso dal [ADMIN_USERNAME] fino al [data] (sito ora) a causa del seguente motivo:

[REASON]
If si desiderano ulteriori informazioni su questa sospensione, si prega di contattare l'amministratore del sito a [SITENAME].

Regards,
[SITEUSERNAME] ";

$locale['email_resend_subject'] = "Re-sent activation link - [SITENAME]";
$locale['email_resend_message'] = "Hello [USER_NAME],<br/>
You received this email because you did not activate the email on our site - [SITENAME].<br/>If you do not activate an email within one day, your registration request will be canceled.<br/>
You have registered with the following information:<br/>Username: [USER_NAME]<br/>
You can activate account with the following link:<br/>[ACTIVATION_LINK]<br/>Regards,<br/>[SITENAME]";
