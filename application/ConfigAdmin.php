<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Config.php
 * -------------------------------------
 */
 
if (MANTENIMIENTO){

define('BASE_URL', 'http://localhost/prored/');
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'admin');

define('APP_NAME', 'ProRed');
define('APP_SLOGAN', 'ProRed Company');
define('APP_COMPANY', 'www.prored.com.ar');
define('SESSION_TIME', 10);
define('HASH_KEY', '4f6a6d832be79');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '1234');
define('DB_NAME', 'prored');
define('DB_CHAR', 'utf8');

} else {
	 
define('BASE_URL', 'http://www.prored.com.ar/admin/');
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'admin');

define('APP_NAME', 'ProRed');
define('APP_SLOGAN', 'ProRed Company');
define('APP_COMPANY', 'www.prored.com.ar');
define('SESSION_TIME', 10);
define('HASH_KEY', '4f6a6d832be79');

define('DB_HOST', 'mysql12.000webhost.com');
define('DB_USER', 'a8098593_prored');
define('DB_PASS', 'nigth1raven');
define('DB_NAME', 'a8098593_prored');
define('DB_CHAR', 'utf8');


}


?>