<?php
// Root directory of the project
define('ROOT_DIR', substr($_SERVER['SCRIPT_FILENAME'], 0, -strlen(basename(__FILE__))));

// Default language 
define('DEFAULT_LANG', 'en');

// Translations
define('TRANSLATIONS_DIR', ROOT_DIR . 'translations');
define('TRANSLATIONS_SCRIPT', TRANSLATIONS_DIR . '/translations.php');

?>
