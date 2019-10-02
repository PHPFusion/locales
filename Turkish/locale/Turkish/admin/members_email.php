<?php
$locale['email_create_subject'] = "[SITENAME] Adresinde Hesap Oluşturuldu";
$locale['email_create_message'] = "Merhaba [USER_NAME],<br/>
[SITENAME] Adresindeki Hesabınız Oluşturuldu.<br/>Şimdi Aşağıdaki Ayrıntıları Kullanarak Giriş Yapabilirsiniz:<br/>
Kullanıcı Adı: [USER_NAME]<br/>
Parola: [PASSWORD]<br/><br/>Saygılarımızla,<br/>[SITEUSERNAME]";

$locale['email_activate_subject'] = "[SITENAME] Adresinden Hesap Etkinleştirildi";
$locale['email_activate_message'] = "Merhaba [USER_NAME],<br/>[SITENAME] Adresindeki Hesabınız Etkinleştirildi.<br/>
Şimdi, Seçtiğiniz Kullanıcı Adı Ve Şifresini Kullanarak Giriş Yapabilirsiniz.<br/><br/>Saygılarımızla,<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "[SITENAME] Adresindeki Hesabın Yeniden Etkinleştirilmesi Gerekiyor";
$locale['email_deactivate_message'] = "Merhaba [USER_NAME],<br/>[SITENAME] Adresinde En Son Giriş Yaptığınız Günden [DEACTIVATION_PERIOD] Gün Geçti. Kullanıcınız Etkin Olmayan Olarak İşaretlendi Ancak Tüm Hesap Ayrıntılarınız Ve İçeriğiniz Bozulmadan Kaldı.<br/><br/>
Hesabınızı Yeniden Etkinleştirmek İçin Aşağıdaki Bağlantıyı Tıklamanız Yeterlidir: [REACTIVATION_LINK]<br/><br/>Saygılarımızla,<br/>[SITEUSERNAME]";

$locale['email_ban_subject'] = "[SITENAME] Üzerindeki Hesabınız Yasaklandı";
$locale['email_ban_message'] = "Merhaba [USER_NAME],<br/>[SITENAME] Üzerindeki Hesabınız Şu Nedenden Dolayı, [ADMIN_USERNAME] Tarafından Yasaklandı:<br/>
[REASON]<br/>Bu Yasak Hakkında Daha Fazla Bilgi Istiyorsanız, Lütfen [SITENAME] Adresindeki Site Yöneticisine Başvurun.<br/><br/>Saygılarımızla,<br/>[SITEUSERNAME]";

$locale['email_secban_subject'] = "[SITENAME] Üzerindeki Hesabınız Yasaklandı";
$locale['email_secban_message'] = "Merhaba [USER_NAME],<br/>[SITENAME] Üzerindeki Hesabınız [ADMIN_USERNAME] Tarafından Yasaklandı, Çünkü Size Akredite Edilmiş Veya Hesabınıza Bağlı Bazı İşlemler Siteyle İlgili Bir Güvenlik Tehdidi Olarak Değerlendirildi.<br/>
Bu Güvenlik Yasağı Hakkında Daha Fazla Bilgi Istiyorsanız, Lütfen [SITENAME] Adresinden Site Yöneticisine Başvurun.<br/><br/>Saygılarımızla,<br/>[SITEUSERNAME]";

$locale['email_suspend_subject'] = "[SITENAME] Üzerindeki Hesabınız Askıya Alındı";
$locale['email_suspend_message'] = "Merhaba [USER_NAME],<br/>
[SITENAME] Üzerindeki Hesabınız Şu Nedenden Dolayı [ADMIN_USERNAME] Tarafından [DATE] Tarihine Kadar (Site Zamanı) Askıya Alındı:<br/>
[REASON]<br/>Bu Askıya Alma Hakkında Daha Fazla Bilgi Istiyorsanız, Lütfen [SITENAME] Adresindeki Site Yöneticisine Başvurun.<br/><br/>Saygılarımızla,<br/>[SITEUSERNAME]";

$locale['email_resend_subject'] = "[SITENAME] - Aktivasyon Linki Tekrar Gönderildi";
$locale['email_resend_message'] = "Merhaba [USER_NAME],<br/>
[SITENAME] Üzerindeki Hesabınızı Etkinleştirmediğiniz İçin Bu E-Postayı Aldınız.<br/> Bir Gün Içinde Bir E-Postayı Etkinleştirmezseniz, Kayıt Isteğiniz Iptal Edilir. <br/>
Aşağıdaki Bilgilerle Kayıt Oldunuz:<br/>Kullanıcı Adı: [USER_NAME]<br/>
Hesabınızı Etkinleştirmek İçin Aşağıdaki Bağlantıyı Tıklamanız Yeterlidir<br/>[ACTIVATION_LINK]<br/>Saygılarımızla,<br/>[SITENAME]";
