<?php
$locale['email_create_subject'] = "Обліковий запис на сайті [SITENAME] створено ";
$locale['email_create_message'] = "Вітаємо, [USER_NAME]!

Ваш обліковий запис на сайті [SITENAME] успішно створено.

Ви можете тепер увійти на сайт, використовуючи наступні параметри авторизації:

ім&lsquo;я: [USER_NAME]

пароль: [PASSWORD]


З повагою,

[SITENAME]";

$locale['email_activate_subject'] = "Обліковий запис активовано ";
$locale['email_activate_message'] = "Вітаємо, [USER_NAME]!

Ваш обліковий запис на сайті [SITENAME] успішно активовано.

Ви можете тепер заходити на сайт, використовуючи свої ім&lsquo;я та пароль.


З повагою,

[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Запит на повторну активацію облікового запису на сайті [SITENAME]";
$locale['email_deactivate_message'] = "Вітаємо, [USER_NAME].

Минуло багато днів ([DEACTIVATION_PERIOD]) з часу Вашого останнього візиту на сайт [SITENAME]. Ваш обліковий запис позначено як бездіяльний, але уся інформація, пов&lsquo;язана із ним, збережена і не зазнала змін.

Щоб повторно активувати Ваш обліковий запис, просто перейдіть за цим посиланням:

[REACTIVATION_LINK]


З повагою,

[SITEUSERNAME]";

$locale['email_ban_subject'] = "Ваш обліковий запис на сайті [SITENAME] заблоковано";
$locale['email_ban_message'] = "Вітаємо, [USER_NAME].

Ваш обліковий запис на сайті [SITENAME] заблоковано адміністратором [USERNAME] за такою підставою:

[REASON]

Якщо бажаєте отримати детальну інформацію про це блокування, будь ласка, зв&lsquo;яжіться з адміністрацією сайту [SITENAME].

З повагою,

[SITEUSERNAME]";

$locale['email_secban_subject'] = "Ваш обліковий запис на сайті [SITENAME] заблоковано з міркувань безпеки";
$locale['email_secban_message'] = "Вітаємо, [USER_NAME].

Ваш обліковий запис на сайті [SITENAME] заблоковано адміністратором [USERNAME] в зв&lsquo;язку з певними діями (Вашими безпосередньо або пов&lsquo;язаними з Вашим обліковим записом), що мають ознаки загрози безпеці сайту.

Якщо бажаєте отримати детальну інформацію про це блокування, будь ласка, зв&lsquo;яжіться з адміністрацією сайту [SITENAME].

[SITENAME]";

$locale['email_suspend_subject'] = "Ваш обліковий запис на сайті [SITENAME] призупинено";
$locale['email_suspend_message'] = "Вітаємо, [USER_NAME].

Дію Вашого облікового запису на сайті [SITENAME] призупинив адміністратор [USERNAME] до [DATE] (час на сайті) за такою підставою:

[REASON].

Якщо бажаєте отримати детальну інформацію про це призупинення, будь ласка, зв&lsquo;яжіться з адміністрацією сайту [SITENAME].

З повагою,

[SITEUSERNAME]";

$locale['email_resend_subject'] = "Re-sent activation link - [SITENAME]";
$locale['email_resend_message'] = "Hello [USER_NAME],<br/>
You received this email because you did not activate the email on our site - [SITENAME].<br/>If you do not activate an email within one day, your registration request will be canceled.<br/>
You have registered with the following information:<br/>Username: [USER_NAME]<br/>
You can activate account with the following link:<br/>[ACTIVATION_LINK]<br/>Regards,<br/>[SITENAME]";
