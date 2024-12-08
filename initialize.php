<?php
// Default developer data
$dev_data = array(
    'id' => '-1',
    'firstname' => 'Developer',
    'lastname' => '',
    'username' => 'dev_oretnom',
    // Use password_hash for better security; replace with the hashed version of your actual password
    'password' => password_hash('securepassword', PASSWORD_BCRYPT), 
    'last_login' => '',
    'date_updated' => '',
    'date_added' => ''
);

// Define constants if not already defined
if (!defined('base_url')) define('base_url', 'http://localhost/datupaglas/'); // Set your local base URL
if (!defined('base_app')) define('base_app', rtrim(str_replace('\\', '/', __DIR__), '/') . '/'); // Normalize base app path
if (!defined('dev_data')) define('dev_data', $dev_data);

// Define database credentials
if (!defined('DB_SERVER')) define('DB_SERVER', getenv('DB_SERVER') ?: "localhost");
if (!defined('DB_USERNAME')) define('DB_USERNAME', getenv('DB_USERNAME') ?: "root");
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv("DB_PASSWORD") ?: " "); // Update this line
if (!defined('DB_NAME')) define('DB_NAME', getenv('DB_NAME') ?: "datupaglas_db");
?>
