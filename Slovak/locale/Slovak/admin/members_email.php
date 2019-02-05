<?php
$locale['email_create_subject'] = "Účet vytvorený ";
$locale['email_create_message'] = "Ahoj [USER_NAME],\n
Váš účet na ".$settings['sitename']." bol vytvorený.\n
Pre prihlásenie použite nasledovné údaje:\n
Meno: [USER_NAME]\n
Heslo: [PASSWORD]\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['email_activate_subject'] = "Účet aktivovaný";
$locale['email_activate_message'] = "Ahoj [USER_NAME],\n
Váš účet na ".$settings['sitename']." bol aktivovaný.\n
Môžete sa prihlásiť pomocou vášho mena a hesla.\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['email_deactivate_subject'] = "Reaktiváciu účtu požaduje ".$settings['sitename'];
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],\n
Uplynulo ".$settings['deactivation_period']." dní od vášho posledného prihlásenia na ".$settings['sitename'].". Boli ste označený ako neaktívny, ale údaje vášho účtu ostávajú nezmenené.\n
Na reaktiváciu vášho účtu kliknite na tento odkaz:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
s pozdravom,\n
".$settings['siteusername'];
$locale['email_ban_subject'] = "Váš účet na ".$settings['sitename']." bol zabanovaný";
$locale['email_ban_message'] = "Ahoj [USER_NAME],\n
Váš účet ".$userdata['user_name']." na ".$settings['sitename']." bol zabanovaný z týchto dôvodov:\n
[REASON].\n
Ak chcete viac informácií ohľadne tohto banu, prosím kontaktujte hlavného administrátora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];
$locale['email_secban_subject'] = "Váš účet na ".$settings['sitename']." bol zabanovaný";
$locale['email_secban_message'] = "Ahoj [USER_NAME],\n
Váš účet ".$userdata['user_name']." na ".$settings['sitename']." bol zabanovaný, pretože niektoré vami vykonané akcie boli považované za bezpečnostnú hrozbu pre web.\n
Ak chcete viac informácií ohľadne tohto bezpečnostného banu, prosím kontaktujte hlavného administrátora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];
$locale['email_suspend_subject'] = "Váš účet na ".$settings['sitename']." bol pozastavený";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],\n
Váš účet ".$userdata['user_name']." na ".$settings['sitename']." bol pozastavený od [DATE] (site time) z týchto dôvodov:\n
[REASON].\n
Ak chcete viac informácií ohľadne tohto pozastavenia účtu, prosím kontaktujte hlavného administrátora cez ".$settings['siteemail'].".\n
".$settings['siteusername'];
