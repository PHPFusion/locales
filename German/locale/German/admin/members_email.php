<?php
$locale['email_create_subject'] = "Account erstellt auf [SITENAME]";
$locale['email_create_message'] = "Hallo [USER_NAME],<br/>
Ihr Konto bei [SITENAME] wurde erstellt.<br/>Sie können sich jetzt mit den folgenden Daten anmelden:<br/>
Benutzername: [USER_NAME]<br/>Passwort: [PASSWORD]<br/>Mit freundlichen Grüßen<br/>[SITEUSERNAME]";

$locale['email_activate_subject'] = "Account aktiviert auf [SITENAME]";
$locale['email_activate_message'] = "Hallo [USER_NAME],<br/>Ihr Konto bei [SITENAME] wurde aktiviert.<br/>
Sie können sich jetzt mit Ihrem gewählten Benutzernamen und Passwort anmelden.<br/>Mit freundlichen Grüßen<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Account-Reaktivierung erforderlich auf [SITENAME]";
$locale['email_deactivate_message'] = "Hallo [USER_NAME],<br/>seit Ihrer letzten Anmeldung bei [SITENAME] sind [DEACTIVATION_PERIOD] Tag(e) vergangen. Ihr Benutzer wurde als inaktiv markiert, aber alle Ihre Kontodetails und Inhalte bleiben erhalten.<br/>
Um Ihr Konto wieder zu aktivieren, klicken Sie einfach auf den folgenden Link: [REACTIVATION_LINK]<br/>Mit freundlichen Grüßen<br/>[SITEUSERNAME]";

$locale['email_ban_subject'] = "Dein Account auf [SITENAME] wurde gesperrt";
$locale['email_ban_message'] = "Hallo [USER_NAME],<br/>Ihr Konto auf [SITENAME] wurde von [ADMIN_USERNAME] aus folgendem Grund gesperrt:<br/>
[GRUND]<br/>Wenn Sie weitere Informationen zu diesem Verbot wünschen, wenden Sie sich bitte an den Site-Administrator unter [SITENAME].<br/>Mit freundlichen Grüßen<br/>[SITEUSERNAME]";

$locale['email_secban_subject'] = "Dein Account auf [SITENAME] wurde gesperrt";
$locale['email_secban_message'] = "Hallo [USER_NAME],<br/>Ihr Konto auf [SITENAME] wurde von [ADMIN_USERNAME] gesperrt, da einige Ihnen zugeschriebene oder mit Ihrem Konto verknüpfte Aktionen als Sicherheitsbedrohung für die Website angesehen wurden.<br/>
Wenn Sie weitere Informationen zu diesem Sicherheitsverbot wünschen, wenden Sie sich bitte an den Site-Administrator unter [SITENAME].<br/>Mit freundlichen Grüßen<br/>[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Dein Account auf [SITENAME] wurde temporär gesperrt";
$locale['email_suspend_message'] = "Hallo [USER_NAME],<br/>
Ihr Konto auf [SITENAME] wurde von [ADMIN_USERNAME] bis zum [DATE] (Site-Zeit) aus folgendem Grund gesperrt:<br/>
[GRUND]<br/>Wenn Sie weitere Informationen zu dieser Sperrung wünschen, wenden Sie sich bitte an den Site-Administrator unter [SITENAME].<br/>Mit freundlichen Grüßen<br/>[SITEUSERNAME]";

$locale['email_resend_subject'] = "Aktivierungslink erneut senden - [SITENAME]";
$locale['email_resend_message'] = "Hallo [USER_NAME],<br/>
Sie haben diese E-Mail erhalten, weil Sie die E-Mail auf unserer Website nicht aktiviert haben – [SITENAME].<br/>Wenn Sie eine E-Mail nicht innerhalb eines Tages aktivieren, wird Ihre Registrierungsanfrage storniert.<br/>
Sie haben sich mit folgenden Informationen registriert:<br/>Benutzername: [USER_NAME]<br/>
Sie können das Konto über den folgenden Link aktivieren:<br/>[ACTIVATION_LINK]<br/>Mit freundlichen Grüßen<br/>[SITENAME]";
