<?php
$locale['email_create_subject'] = "Учётная запись создана на сайте ";
$locale['email_create_message'] = "Приветствую, [USER_NAME]!<br/>
Ваша учётная запись на сайте «[SITENAME]» была создана.<br/>Вы можете войти, используя эти данные:<br/>
Имя пользователя: [USER_NAME]<br/>
Пароль: [PASSWORD]<br/><br/>С наилучшими пожеланиями,<br/>[SITEUSERNAME]";

$locale['email_activate_subject'] = "Учётная запись активирована на сайте «[SITENAME]»";
$locale['email_activate_message'] = "Приветствую, [USER_NAME]!<br/>Ваша учётная запись на сайте «[SITENAME]» была активирована.<br/>
Вы можете войти на сайт, используя свои имя пользователя и пароль.<br/>С наилучшими пожеланиями,<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Ваша учётная запись на сайте «[SITENAME]» требует повторной активации";
$locale['email_deactivate_message'] = "Приветствую, [USER_NAME]!<br/>Прошло [DEACTIVATION_PERIOD] дней с Вашего последнего посещения сайта «[SITENAME]». Ваша учётная запись была помечена как неактивная, но Ваши пользовательские данные и содержимое на сайте остались в сохранности.<br/>
Для повторной активации Вашей учётной записи нажмите на ссылку: [REACTIVATION_LINK]<br/>С наилучшими пожеланиями,<br/>[SITEUSERNAME]";

$locale['email_ban_subject'] = "Ваша учётная запись на сайте «[SITENAME]» была заблокирована";
$locale['email_ban_message'] = "Приветствую, [USER_NAME]!<br/>Ваша учётная запись на сайте «[SITENAME]» была заблокирована администратором [ADMIN_USERNAME] по следующим причинам:<br
[REASON].<br/>Если Вы хотите узнать больше информации, пожалуйста, свяжитесь с администратором сайта «[SITENAME]».<br/>С наилучшими пожеланиями,<br/>[SITEUSERNAME]";

$locale['email_secban_subject'] = "Ваша учётная запись на сайте «[SITENAME]» была заблокирована";
$locale['email_secban_message'] = "Приветствую, [USER_NAME]!<br/>Ваша учётная запись на сайте «[SITENAME]» была заблокирована администратором [ADMIN_USERNAME] из-за связанных с Вашей учётной записью действий, которые содержали угрозу безопасности сайта.<br/>
Если Вы хотите узнать больше информации, пожалуйста, свяжитесь с администратором сайта «[SITENAME]».<br/>С наилучшими пожеланиями,<br/>[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Ваша учётная запись на сайте «[SITENAME]» приостановлена";
$locale['email_suspend_message'] = "Приветствую, [USER_NAME]!<br/>
Ваша учётная запись на сайте «[SITENAME]» была приостановлена администратором [ADMIN_USERNAME] до [DATE] (часовой пояс сайта) по следующим причинам:<br/>
[REASON].<br/>Если Вы хотите узнать больше информации, пожалуйста, свяжитесь с администратором сайта «[SITENAME]».<br/>С наилучшими пожеланиями,<br/>[SITEUSERNAME]";

$locale['email_resend_subject'] = "Переслать ссылку активации - «[SITENAME]»";
$locale['email_resend_message'] = "Здраствуйте [USER_NAME],<br/>
Вы получили этот Е-майл, потому что вы не активировали Е-майл на нашем сайте - «[SITENAME]».<br/>If you do not activate an email within one day, your registration request will be canceled.<br/>
Вы зарегистрировались со следующей информацией:<br/>Ваш логин: [USER_NAME]<br/>
Вы можете активировать учетную запись через эту ссылку:<br/>[ACTIVATION_LINK]<br/>С уважением,<br/>«[SITENAME]»";
