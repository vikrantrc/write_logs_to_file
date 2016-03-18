Description
===========
This is experimental code for developer only 

Installation
============
Standard module installation procedure. Copy the module to modules directory,
and enable.

Use the put_data_file_log($error_log) function in your code to write log in text file located at "tmp" directory.

/**
 * [$error_log Use below code where user to track code log]
 * @type {Function}
 */
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

put_data_file_log($error_log);

