<?php
// Set timezone
date_default_timezone_set('Asia/Manila');

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include necessary files
require_once('initialize.php');
require_once('classes/DBConnection.php');

// Define base constants if not already defined
if (!defined('base_url')) define('base_url', 'http://yourwebsite.com/');
if (!defined('base_app')) define('base_app', '/path/to/your/application/');

// Initialize database connection
$db = new DBConnection;
$conn = $db->getConnection();

// Redirect function
function redirect($url = '') {
    if (!empty($url)) {
        header("Location: " . base_url . $url);
        exit;
    }
}

// Validate image function
function validate_image($file) {
    if (!empty($file)) {
        $ex = explode('?', $file);
        $file = $ex[0];
        $param = isset($ex[1]) ? '?' . $ex[1] : '';
        if (is_file(base_app . $file)) {
            return base_url . $file . $param;
        } else {
            error_log("Image file not found: " . base_app . $file); // Log missing file
            return base_url . 'dist/img/no-image-available.png';
        }
    } else {
        return base_url . 'dist/img/no-image-available.png';
    }
}

// Check if the user is on a mobile device
function isMobileDevice() {
    $aMobileUA = array(
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );

    foreach ($aMobileUA as $sMobileKey => $sMobileOS) {
        if (preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])) {
            return true;
        }
    }
    return false;
}
    // Check if user is already logged in and redirect to index.php
if (isset($_SESSION['userdata']) && $_SESSION['userdata']['type_of_user'] == 2) {
    redirect('admin/login.php');
}
?>
