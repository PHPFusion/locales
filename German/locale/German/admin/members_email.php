<?php
$locale['email_create_subject'] = "Account erstellt auf [SITENAME]";
$locale['email_create_message'] = "Hallo [USER_NAME],<br/>
Ihr Konto bei [SITENAME] wurde erstellt.<br/>Sie können sich jetzt mit folgenden Details anmelden:<br/>
Benutzername: [USER_NAME]<br/>Passwort: [PASSWORD]<br/>Grüße,<br/>[SITEUSERNAME]";

$locale['email_activate_subject'] = "Account aktiviert auf [SITENAME]";
$locale['email_activate_message'] = "Hallo [USER_NAME],<br/>Ihr Konto bei [SITENAME] wurde aktiviert.<br/>
Sie können sich jetzt mit Ihrem gewählten Benutzernamen und Passwort anmelden.<br/>Mit freundlichen Grüßen,<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Account-Reaktivierung erforderlich auf [SITENAME]";
$locale['email_deactivate_message'] = "Hallo [USER_NAME],<br/>Es ist [DEACTIVATION_PERIOD] Tag(e) seit Sie sich zuletzt bei [SITENAME] angemeldet haben. Ihr Benutzer wurde als inaktiv markiert, aber alle Ihre Kontodaten und Inhalte bleiben intakt.<br/>
Um Ihr Konto zu reaktivieren, klicken Sie einfach auf den folgenden Link: [REACTIVATION_LINK]<br/>Mit freundlichen Grüßen,<br/>[SITEUSERNAME]";

$locale['email_ban_subject'] = "Dein Account auf [SITENAME] wurde gesperrt";
$locale['email_ban_message'] = "Hallo [USER_NAME],<br/>Ihr Konto bei [SITENAME] wurde von [ADMIN_USERNAME] gesperrt, aus folgendem Grund:<br/>
[REASON]<br/>Wenn Sie weitere Informationen über dieses Verbot wünschen, bitte kontaktieren Sie den Website-Administrator unter [SITENAME].<br/>Grüße,<br/>[SITEUSERNAME]";

$locale['email_secban_subject'] = "Dein Account auf [SITENAME] wurde gesperrt";
$locale['email_secban_message'] = "Hallo [USER_NAME],<br/>Ihr Konto auf [SITENAME] wurde von [ADMIN_USERNAME] wegen einiger Aktionen, die Sie akkreditiert oder mit Ihrem Konto verbunden sind, als Sicherheitsbedrohung für die Seite gesperrt.<br/>
Wenn Sie weitere Informationen über dieses Sicherheitsverbot wünschen, wenden Sie sich bitte an den Website-Administrator unter [SITENAME].<br/>Grüße,<br/>[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Dein Account auf [SITENAME] wurde temporär gesperrt";
$locale['email_suspend_message'] = "Hallo [USER_NAME],<br/>
Ihr Konto auf [SITENAME] wurde von [ADMIN_USERNAME] bis [DATE] (Site-Zeit) gesperrt wegen folgendem Grund:<br/>
[REASON]<br/>Wenn Sie weitere Informationen über diese Suspendierung wünschen, bitte kontaktieren Sie den Website-Administrator unter [SITENAME].<br/>Grüße,<br/>[SITEUSERNAME]";

$locale['email_resend_subject'] = "Aktivierungslink erneut senden - [SITENAME]";
$locale['email_resend_message'] = "Hallo [USER_NAME],<br/>
Sie haben diese E-Mail erhalten, weil Sie die E-Mail nicht auf unserer Seite aktiviert haben - [SITENAME].<br/>Wenn Sie innerhalb eines Tages keine E-Mail aktivieren, wird Ihre Registrierungsanfrage abgebrochen.<br/>
Sie haben sich mit den folgenden Informationen registriert:<br/>Benutzername: [USER_NAME]<br/>
Sie können das Konto mit folgendem Link aktivieren:<br/>[ACTIVATION_LINK]<br/>Mit freundlichen Grüßen,<br/>[SITENAME]";
