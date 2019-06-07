<?php
$locale['email_create_subject'] = "Účet byl vytvořen na [SITENAME]";
$locale['email_create_message'] = "Ahoj [USER_NAME],<br/>\r\n
Váš účet na [SITENAME] byl vytvořen.<br/>\r\nNyní můžete přihlásit pomocí následujících podrobností:<br/>\r\n
Uživatelské jméno: [USER_NAME]<br/>\r\nHeslo: [PASSWORD]<br/>\r\nS pozdravem,<br/>\r\n[SITEUSERNAME]";

$locale['email_activate_subject'] = "Účet aktivován na [SITENAME]";
$locale['email_activate_message'] = "Ahoj [USER_NAME],<br/>\r\nVáš účet na [SITENAME] byl aktivován.<br/>\r\n
Nyní můžete přihlásit pomocí zvoleného uživatelského jména a hesla.<br/>\r\nS pozdravem,<br/>\r\n[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Reaktivace účtu je požadována na [SITENAME]";
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],<br/>\r\nBylo to [DEACTIVATION_PERIOD] dnů(y) od vašeho přihlášení naposledy [SITENAME]. Uživatel byl označen jako neaktivní, ale veškeré údaje o účtu a obsah zůstávají nedotčeny.<br/>\r\n
Chcete-li účet znovu aktivovat, stačí kliknout na následující odkaz: [REACTIVATION_LINK]<br/>\r\nS pozdravem,<br/>\r\n[SITEUSERNAME]";

$locale['email_ban_subject'] = "Váš účet je zapnutý [SITENAME] byl zakázán";
$locale['email_ban_message'] = "Ahoj [USER_NAME],<br/>\r\nVáš účet je zapnutý [SITENAME] byl zakázán [ADMIN_USERNAME] z následujícího důvodu:<br/>\r\n
[REASON]<br/>\r\nChcete-li získat další informace o tomto zákazu, obraťte se na správce webu na adrese [SITENAME].<br/>\r\nS pozdravem,<br/>\r\n[SITEUSERNAME]";

$locale['email_secban_subject'] = "Váš účet je zapnutý [SITENAME] byl zakázán";
$locale['email_secban_message'] = "Ahoj [USER_NAME],<br/>\r\nVáš účet je zapnutý [SITENAME] byl zakázán [ADMIN_USERNAME] protože některé akce akreditované nebo spojené s vaším účtem byly považovány za bezpečnostní hrozbu pro web.<br/>\r\n
Chcete-li získat další informace o tomto zákazu zabezpečení, obraťte se na správce webu na adrese [SITENAME].<br/>\r\nS pozdravem,<br/>\r\n[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Váš účet je zapnutý [SITENAME] byl pozastaven";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],<br/>\r\n
Váš účet je zapnutý [SITENAME] byl pozastaven [ADMIN_USERNAME] až do [DATE] (čas na webu) z následujícího důvodu:<br/>\r\n
[REASON]<br/>\r\nChcete-li získat další informace o tomto pozastavení, kontaktujte administrátora webu na adrese [SITENAME].<br/>\r\nS pozdravem,<br/>\r\n[SITEUSERNAME]";

$locale['email_resend_subject'] = "Znovu odeslán aktivační link - [SITENAME]";
$locale['email_resend_message'] = "Ahoj [USER_NAME],<br/>\r\n
Tento e-mail jste dostali, protože jste neaktivovali e-mail na našich stránkách - [SITENAME].<br/>\r\nPokud v průběhu jednoho dne neaktivujete e-mail, vaše žádost o registraci bude zrušena.<br/>\r\n
Zaregistrovali jste se s následujícími údaji:<br/>\r\nUživatelské jméno: [USER_NAME]<br/>\r\n
Můžete aktivovat účet s následujícím odkazem:<br/>\r\n[ACTIVATION_LINK]<br/>\r\nS pozdravem,<br/>\r\n[SITENAME]";
