<?php
/*
  Configurations
*/

//General
define('BASE_URL', 'http://localhost/fundacionpoma/cms');
define('NAME', 'Fundación Poma');
define('SLOGAN', 'Impulsando el progreso social');
define('P_EMAIL', '');
define('LOGO', 'http://fundacionpoma.org/wp-content/themes/fundacion_poma/images/logo.png');
define('FAVICON', 'http://fundacionpoma.org/wp-content/themes/fundacion_poma/images/logo.png');
define('COLOR', '#399bff');
define('LANGUAGE', 'es');

define('COPYRIGHT', 'Copyright © 2018');
define('TIMEZONE', 'Europe/Berlin');

define('FORCE_HTTPS', 0);
define('AUTO_UPDATE', 1);
define('HEADER_LOGO', 1);

//Database Info
define('DATABASE_NAME', 'toolbox_poma'); 
define('DATABASE_USER', 'toolbox_poma');
define('DATABASE_PASS', 'fr^0nLA6+^KfFpQ');
define('DATABASE_HOST', 'localhost'); 

//Mail
define('MAIL_TYPE', 1);  // 1 = Server Default / 2 = Mandrill / 3 = SendGrid
define('MAIL_MANDRILL_KEY', '');
define('MAIL_SENDGRID_KEY', '');

//Normal Register
define('NLOGIN_ENABLE', 1);
define('REGISTER_ENABLE', 1);
define('FORGOT_ENABLE', 1);

//Google Login
//You can get it from: https://console.developers.google.com/
define('GLOGIN_ENABLE', 0);
define('GLOGIN_CLIENT_ID', '');
define('GLOGIN_CLIENT_SECRET', '');

//Facebook Login
//You can get it from: https://developers.facebook.com/
define('FLOGIN_ENABLE', 0);
define('FLOGIN_APP_ID', '');
define('FLOGIN_APP_SECRET', '');

//Advance Settings
//If you not sure what happend here not change nothing.
define('DEFAULT_MODULE', 'general');
define('DEFAULT_PAGE', 'home');
define('DEFAULT_LEVEL', '2');

?>