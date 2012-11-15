<?php
/*
MachForm Configuration File
THIS FILE MUST BE RENAMED config.php BEFORE STARTING INSTALLATION
*/

/** MySQL settings **/
define('DB_NAME', 'dailybrink_formdata'); //The name of your database. Note that this database must exist before running installer.php
define('DB_USER', 'dailybrink'); //Your database username
define('DB_PASSWORD', 'pandoraboxx'); //Your database users password
define('DB_HOST', 'mysql.dailybrink.com'); //The hostname for your database
	
/** Admin user and password **/
define('ADMIN_USER','admin');
define('ADMIN_PASSWORD','pandoraboxx');
	


/** Data folder **/
/** Normally, you can just leave this **/
define('DATA_DIR', './data'); 

/** CAPTCHA settings **/
/** To use reCAPTCHA you must get an API key from http://recaptcha.net/api/getkey **/
define('RECAPTCHA_PUBLIC_KEY','6LdQIbwSAAAAAEjQ_B9veDXCKhFPCAlkGeWzOr5i');
define('RECAPTCHA_PRIVATE_KEY','6LdQIbwSAAAAAEXAOsPUOe-YTO6lXQ2lkJhwTY0Z');

/** Set below to 'true' if you prefer to use the internal CAPTCHA implementation instead of reCAPTCHA **/
/** GD extension must be enabled in order to use this option **/
define('USE_INTERNAL_CAPTCHA',false);

/** SMTP settings **/
/** Don't modify it unless you know you are using SMTP **/
define('USE_SMTP',false); //set this to 'true' to use SMTP

define('SMTP_HOST','localhost');
define('SMTP_PORT',25);
define('SMTP_AUTH',false); //if your SMTP require authentification, set this to 'true'
define('SMTP_USERNAME','YOUR_SMTP_USERNAME');
define('SMTP_PASSWORD','YOUR_SMTP_PASSWORD');

/** Default notification email settings **/
define('NOTIFICATION_MAIL_FROM',''); //default is 'no-reply@yourdomain.com'
define('NOTIFICATION_MAIL_FROM_NAME',''); //default is 'MachForm'
define('NOTIFICATION_MAIL_SUBJECT',''); //default is '{form_name} [#{entry_no}]'

/** Current MachForm Version **/
define('MACHFORM_VERSION','2.0');

error_reporting(E_ALL ^ E_NOTICE);
@header("Content-Type: text/html; charset=UTF-8"); 
?>