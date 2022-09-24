<?php
$locale['email_create_subject'] = "Účet byl vytvořen na [SITENAME]";
$locale['email_create_message'] = "Ahoj [USER_NAME],<br/>
Váš účet na [SITENAME] byl vytvořen.<br/>Nyní můžete přihlásit pomocí následujících podrobností:<br/>
Uživatelské jméno: [USER_NAME]<br/>Heslo: [PASSWORD]<br/>S pozdravem,<br/>[SITEUSERNAME]";

$locale['email_activate_subject'] = "Účet aktivován na [SITENAME]";
$locale['email_activate_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] byl aktivován.<br/>
Nyní můžete přihlásit pomocí zvoleného uživatelského jména a hesla.<br/>S pozdravem,<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Vyžaduje se reaktivace účtu na [SITENAME]";
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],<br/>Uplynulo [DEACTIVATION_PERIOD] dní od vašeho posledního přihlášení na [SITENAME]. Byli jste označen jako neaktivní, ale údaje účtu zůstávají nezměněny.<br/>
Chcete-li účet znovu aktivovat, stačí kliknout na následující odkaz: [REACTIVATION_LINK]<br/>S pozdravem,<br/>[SITEUSERNAME]";

$locale['email_ban_subject'] = "Váš účet je zapnutý [SITENAME] byl zakázán";
$locale['email_ban_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] byl zabanovaný od [ADMIN_USERNAME] z následujícího důvodu:<br/>
[REASON]<br/>Chcete-li získat další informace o tomto zákazu, obraťte se na správce webu na [SITENAME].<br/>S pozdravem,<br/>[SITEUSERNAME]";

$locale['email_secban_subject'] = "Váš účet je zapnutý [SITENAME] byl zakázán";
$locale['email_secban_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] byl zabanovaný od [ADMIN_USERNAME] protože některé vámi provedené akce byly považovány za bezpečnostní hrozbu pro web.<br/>
Chcete-li získat další informace o tomto zákazu zabezpečení, obraťte se na správce webu na [SITENAME].<br/>S pozdravem,<br/>[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Váš účet na [SITENAME] byl pozastaven";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],<br/>
Váš účet na [SITENAME] byl pozastaven [ADMIN_USERNAME] až do [DATE] (čas na webu) z následujícího důvodu:<br/>
[REASON]<br/>Chcete-li získat další informace o tomto pozastavení, kontaktujte administrátora webu na [SITENAME].<br/>S pozdravem,<br/>[SITEUSERNAME]";

$locale['email_resend_subject'] = "Znovu odeslán aktivační link - [SITENAME]";
$locale['email_resend_message'] = "Ahoj [USER_NAME],<br/>
Tento e-mail jste dostali, protože jste neaktivovali e-mail na našich stránkách - [SITENAME].<br/>Pokud v průběhu jednoho dne neaktivujete e-mail, vaše žádost o registraci bude zrušena.<br/>
Zaregistrovali jste se s následujícími údaji:<br/>Uživatelské jméno: [USER_NAME]<br/>
Můžete aktivovat účet s následujícím odkazem:<br/>[ACTIVATION_LINK]<br/>S pozdravem,<br/>[SITENAME]";
