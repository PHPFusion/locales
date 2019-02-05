<?php
$locale['email_create_subject'] = "Учётная запись создана ";
$locale['email_create_message'] = "Здравствуйте [USER_NAME],\n
Ваша учётная запись на ".$settings['sitename']." была создана.\n
Вы можете сейчас авторизоваться, используя следующие детали:\n
логин: [USER_NAME]\n
пароль: [PASSWORD]\n\n
С уважением,\n
".$settings['siteusername'];
$locale['email_activate_subject'] = "Учётная запись активирована";
$locale['email_activate_message'] = "Здравствуйте [USER_NAME],\n
Ваша учётная запись ".$settings['sitename']." активирована.\n
Вы можете войти, используя Ваш логин и пароль.\n
С уважением,\n
".$settings['siteusername'];
$locale['email_deactivate_subject'] = "Учётная запись. Повторная активация  ".$settings['sitename'];
$locale['email_deactivate_message'] = "Здравствуйте [USER_NAME],\n
Учётная запись ".$settings['deactivation_period']." день(дней) с момента последнего входа ".$settings['sitename'].". Ваша учётная запись была отмечена как неактивная, но все данные и содержание остаются неизменными.\n
Чтобы активировать учетную запись просто нажмите на следующую ссылку:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
С уважением,\n\n
".$settings['siteusername'];
$locale['email_ban_subject'] = "Ваша учётная запись ".$settings['sitename']."забанена";
$locale['email_ban_message'] = "Здравствуйте [USER_NAME],\n
Ваша учётная запись ".$settings['sitename']." была запрещена ".$userdata['user_name']." из-за следующих причин:\n
[REASON].\n
Если вы хотите получить больше информации о данном запрете, пожалуйста, обратитесь к администратору сайта ".$settings['siteemail'].".\n
".$settings['siteusername'];
$locale['email_secban_subject'] = "Ваша учётная запись ".$settings['sitename']."была запрещена";
$locale['email_secban_message'] = "Здравствуйте [USER_NAME],\n
Ваша учётная запись ".$settings['sitename']." была запрещена ".$userdata['user_name']." из-за каких-либо Ваших действий, которые представляли угрозу безопасности для нашего сайта.\n
Если вы хотите получить больше сведений о данном запрете, пожалуйста, обратитесь к администратору сайта ".$settings['siteemail'].".\n
".$settings['siteusername'];
$locale['email_suspend_subject'] = "Ваша учётная запись ".$settings['sitename']."была приостановлена";
$locale['email_suspend_message'] = "Здравствуйте [USER_NAME],\n
Ваша учётная запись ".$settings['sitename']." была приостановлена ".$userdata['user_name']." до [DATE] из-за следующих причин:\n
[REASON].\n
Если вы хотите получить больше информации о данной отсрочке, пожалуйста, обратитесь к администратору сайта ".$settings['siteemail'].".\n
".$settings['siteusername'];
