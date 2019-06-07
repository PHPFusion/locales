<?php
$locale['email_create_subject'] = "Účet vytvorený na [SITENAME]";
$locale['email_create_message'] = "Ahoj [USER_NAME],<br/>\r\n
Váš účet na [SITENAME] bol vytvorený.<br/>\r\nPre prihlásenie použite nasledovné údaje:<br/>\r\n
Užívateľské meno: [USER_NAME]<br/>\r\nHeslo: [PASSWORD]<br/>\r\nS pozdravom,<br/>\r\n[SITEUSERNAME]";

$locale['email_activate_subject'] = "Účet aktivovaný na [SITENAME]";
$locale['email_activate_message'] = "Ahoj [USER_NAME],<br/>\r\nVáš účet na [SITENAME] bol aktivovaný.<br/>\r\n
Teraz sa môžete prihlásiť pomocou zvoleného mena a hesla.<br/>\r\nS pozdravom,<br/>\r\n[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Vyžaduje sa reaktivácia účtu na [SITENAME]";
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],<br/>\r\nUplynulo [DEACTIVATION_PERIOD] dní od vášho posledného prihlásenia na [SITENAME]. Boli ste označený ako neaktívny, ale údaje vášho účtu ostávajú nezmenené.<br/>\r\n
Na reaktiváciu vášho účtu kliknite na tento odkaz: [REACTIVATION_LINK]<br/>\r\nS pozdravom,<br/>\r\n[SITEUSERNAME]";

$locale['email_ban_subject'] = "Váš účet na [SITENAME] bol zabanovaný";
$locale['email_ban_message'] = "Ahoj [USER_NAME],<br/>\r\nVáš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] z tohto dôvodu:<br/>\r\n
[REASON]<br/>\r\nAk chcete získať viac informácií o tomto zákaze, kontaktujte správcu webu na [SITENAME].<br/>\r\nS pozdravom,<br/>\r\n[SITEUSERNAME]";

$locale['email_secban_subject'] = "Váš účet na [SITENAME] bol zabanovaný";
$locale['email_secban_message'] = "Ahoj [USER_NAME],<br/>\r\nVáš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] pretože niektoré vami vykonané akcie boli považované za bezpečnostnú hrozbu pre web.<br/>\r\n
Ak chcete získať ďalšie informácie o tomto bezpečnostnom zákaze, kontaktujte správcu webu na [SITENAME].<br/>\r\nS pozdravom,<br/>\r\n[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Váš účet na [SITENAME] bol pozastavený";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],<br/>\r\n
Váš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] od [DATE] (čas stránky) z týchto dôvodov:<br/>\r\n
[REASON]<br/>\r\nAk chcete získať ďalšie informácie o tomto pozastavení, obráťte sa na správcu webu na [SITENAME].<br/>\r\nS pozdravom,<br/>\r\n[SITEUSERNAME]";

$locale['email_resend_subject'] = "Znova odoslaný aktivačný link - [SITENAME]";
$locale['email_resend_message'] = "Ahoj [USER_NAME],<br/>\r\n
Tento e-mail ste dostali, pretože ste neaktivovali e-mail na našich stránkach - [SITENAME].<br/>\r\nAk v priebehu jedného dňa neaktivujete e-mail, vaša žiadosť o registráciu bude zrušená.<br/>\r\n
Zaregistrovali ste sa s nasledujúcími údajmi:<br/>\r\nUžívateľské meno: [USER_NAME]<br/>\r\n
Môžete aktivovať účet s nasledujúcim odkazom:<br/>\r\n[ACTIVATION_LINK]<br/>\r\nS pozdravom,<br/>\r\n[SITENAME]";
