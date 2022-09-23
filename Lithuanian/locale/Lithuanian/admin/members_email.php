<?php
$locale['email_create_subject'] = "Vartotojas sukurtas puslapyje ";
$locale['email_create_message'] = "Sveiki [USER_NAME],
							 
Jūsų vartotojas puslapyje [SITENAME] buvo sukurtas.
Norėdami prisijungti naudokite šiuo duomenis:
prisijungimo vardas: [USER_NAME]

slaptažodis: [PASSWORD]

Pagarbiai,
[SITEUSERNAME]";

$locale['email_activate_subject'] = "Vartotojas aktyvuoas puslapyje [SITENAME]";
$locale['email_activate_message'] = "Sveiki [USER_NAME],

Jūsų vartotojas puslapyje [SITENAME] buvo aktyvuotas.

Dabar jūs galite prisijungti naudodami pasirinktą vartotojo vardą ir slaptažodį.


Pagarbiai,
[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Jūsų vartotojui puslapyje [SITENAME] reikalingas naujas aktyvavimas.";
$locale['email_deactivate_message'] = "Sveiki, [USER_NAME],

Jau praėjo [DEACTIVATION_PERIOD] diena(-ų, -os) nuo paskutinio jūsų prisijungimo puslapyje [SITENAME]. Jūsų vartotojas buvo pažymėtas kaip neaktyvus, tačiau visa vartotojo informacija išlieka nepaliesta.


Norėdami iš naujo aktyvuoti vartotoją paspauskite ant žemiau esančios nuorodos:
[REACTIVATION_LINK]

Pagarbiai,
[SITEUSERNAME]";

$locale['email_ban_subject'] = "Jūsų vartotojas [SITENAME] buvo blokuotas";
$locale['email_ban_message'] = "Sveiki [USER_NAME],

Jūsų vartotojas puslapyje [SITENAME] dėl žemiau nurodytų priežasčių buvo užblokuotas administratoriaus [ADMIN_USERNAME]:
[REASON].

Jeigu norite gauti daugiau informacijos susisiekite su puslapio administratorium tinklapyje [SITENAME].

Pagarbiai,
[SITEUSERNAME]";

$locale['email_secban_subject'] = "Jūsų vartotojas [SITENAME] buvo blokuotas";
$locale['email_secban_message'] = "Sveiki [USER_NAME],

Jūsų vartotojas puslapyje [SITENAME] buvo užblokuotas administratoriaus [ADMIN_USERNAME], nes jūsų vartotojo veiksmai, ar jo buvimas puslapyje traktuojami kaip tiesioginė grėsmė puslapio saugumui.

Jeigu norite gauti daugiau informacijos susisiekite su puslapio administratorium tinklapyje [SITENAME].

Pagarbiai,
[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Jūsų vartotojo galiojimas puslapyje [SITENAME] buvo laikinai sustabdytas";
$locale['email_suspend_message'] = "Sveiki [USER_NAME],

Jūsų vartotojo galiojimas puslapyje [SITENAME] dėl žemiau nurodytų priežasčių buvo laikinai sustabdytas administratoriaus [ADMIN_USERNAME] iki [DATE] (puslapio laiku):

[REASON].
Jeigu norite gauti daugiau informacijos susisiekite su puslapio administratorium tinklapyje [SITENAME].

Pagarbiai,
[SITEUSERNAME]";

$locale['email_resend_subject'] = "Re-sent activation link - [SITENAME]";
$locale['email_resend_message'] = "Hello [USER_NAME],<br/>
You received this email because you did not activate the email on our site - [SITENAME].<br/>If you do not activate an email within one day, your registration request will be canceled.<br/>
You have registered with the following information:<br/>Username: [USER_NAME]<br/>
You can activate account with the following link:<br/>[ACTIVATION_LINK]<br/>Regards,<br/>[SITENAME]";
