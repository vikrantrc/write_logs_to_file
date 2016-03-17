<?php

/**
 * Drupal snippet to be use in any drupal custom module
 * [set tracking code by log all data]
 * @param  array  $error_log [description]
 * @return [type]            [description]
 */
function put_data_file_log($error_log = array()) {
    global $user, $base_url, $base_path;
    $error_log['user_id'] = $user->uid;   
    $border = PHP_EOL . str_repeat("+", 120) . PHP_EOL;
    $error_log = $border . print_r($error_log, true) . $border;
    $error_log['user_id'] = $user->uid;   
    //Save string to log in drupal root, use FILE_APPEND to append.
    file_put_contents(DRUPAL_ROOT . '/tmp/my_site_log_'. date("Y-m-d--h-i") . '.txt', $error_log, FILE_APPEND);
    //Uncomment below code to save string to your root dir, use FILE_APPEND to append.
    //file_put_contents('./log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);
    return true;
}

$error_log = array(
    'date' => date('Y-m-d h:m:s') ,
    'file_name' => $_SERVER['SCRIPT_FILENAME'],
    'ip_address' => $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, g:i:s a") ,
    'Message' => "Calling inside " . FUNCTION,
    'method' => FUNCTION,
    'session' => $_SESSION,
    'url_access' => $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    'file_access' => FILE,
    'url API' => $url,
    'line_access' => LINE
    );

 //data tracking
 put_data_file_log($error_log);
