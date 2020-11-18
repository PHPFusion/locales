<?php
$locale['email_create_subject'] = "Потребителят е създаден в [SITENAME]";
$locale['email_create_message'] = "Здравейте [USER_NAME],

Потребителят Ви в [SITENAME] е създаден.
Вече можете да влезете, като използвате следната информация:

потребител: [USER_NAME]

парола: [PASSWORD]

С уважение,
[SITEUSERNAME]";

$locale['email_activate_subject'] = "Потребителят е активиран в [SITENAME]";
$locale['email_activate_message'] = "Здравейте [USER_NAME],
Потребителят Ви в [SITENAME] е активиран.

Може да влезете в сайта, като използвате потребителското си име и паролата към него.

С уважение,
[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Потребителят е активиран отново в [SITENAME]";
$locale['email_deactivate_message'] = "Здравейте [USER_NAME],
Минаха [DEACTIVATION_PERIOD] ден/дни от последното Ви влизане в [SITENAME]. Вашият потребител е маркиран, като неактивен, но цялота Ви информация остава непроменена.


За да активирате отново потребителя си просто натиснете следната връзка: [REACTIVATION_LINK]

С уважение,
[SITEUSERNAME]";

$locale['email_ban_subject'] = "Потребителят Ви в [SITENAME] е баннат";
$locale['email_ban_message'] = "Здравейте [USER_NAME],
Потребителят Ви в [SITENAME] е баннат от [ADMIN_USERNAME] поради следните причини:

[REASON]
Ако искате повече информация за този бан, моля свържете се с администратора на сайта на [SITENAME].

С уважение,
[SITEUSERNAME]";

$locale['email_secban_subject'] = "Потребителят Ви в [SITENAME] е баннат";
$locale['email_secban_message'] = "Здравейте [USER_NAME],
Потребителят Ви в [SITENAME] е баннат от [ADMIN_USERNAME] поради Ваши действия, които са определни като заплаха за сигурността на сайта.

Ако искате повече информация за този бан от съображение за сигурността, моля свържете се с администратора на [SITENAME].

С уважение,
[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Вашият потребител в [SITENAME] е наказан";
$locale['email_suspend_message'] = "Здравейте [USER_NAME],

Потребителят Ви в [SITENAME] е наказан от [ADMIN_USERNAME] до [DATE] (site time) поради следните причини:

[REASON]
Ако искате повече информация относно това наказание, моля свържете се с администратора на [SITENAME].

С уважение
[SITEUSERNAME]";

$locale['email_resend_subject'] = "Re-sent activation link - [SITENAME]";
$locale['email_resend_message'] = "Hello [USER_NAME],<br/>
You received this email because you did not activate the email on our site - [SITENAME].<br/>If you do not activate an email within one day, your registration request will be canceled.<br/>
You have registered with the following information:<br/>Username: [USER_NAME]<br/>
You can activate account with the following link:<br/>[ACTIVATION_LINK]<br/>Regards,<br/>[SITENAME]";
