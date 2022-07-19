# Track-Log
This snippet mainly use in any custom drupal module for tracking exceution of code.

It is very helpfull code, sometimes we can't log what's happing while processing the code. this code will create a log file in "tmp" folder in drupal root directory.

1) Create a "tmp" folder if doesn't exist or any name of your choice to save log file in drupal root directory (Make such changes in code).
2) Think and identify where you need to track code excecution, use "put_data_file_log($error_log);" function there.
3) You need to define "$error_log" as an array above the function call, as shown in code snippet.

Thanks to Neeraj Singh @ https://github.com/neerajsinghsonu, initiated by Neeraj while development.
