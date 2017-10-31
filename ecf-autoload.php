<?php

/**
* Call queue('includes','function', 'hello', 'php');
* Output : include_once(dir/hello.php);
* first param is the directory name
* second param list of files to include
**********************************************/
function queue(){
  $files = func_get_args();
  $dir = array_shift($files);
  $includefiles = $files;
    foreach ($includefiles as $file) {
      # files
      $dirfilepath = $dir . '/' . $file. '.php';
    if (file_exists($dirfilepath)) {
        # load the file
        include_once($dirfilepath);
      }  else {
        # provide feedback
        print_r('<strong style="color:#B51020">Ooops</strong> Sorry Sparky I cant find {' . $file . '}<br/>');
      }
		}
	}
/**********************************************************************
* CALL THE FUNCTION
* queue('includes','function', 'hello', 'php');
* the 'dir' defines the directory where the files are stored
* the rest of the paramameters will be list of files in the directory to include
* we asume that all files are php files
* OUTPUT
* include_once(dir/myfunctions.php);
* include_once(dir/new-class.php);
* include_once(dir/hello.php);
* if you want to include alot of files to make things a bit more simple you could do the following
* $params = array(
*    'myfunctions',
*    'new-class',
*    'hello'
*   );
* queue($params);
* you can now include many files and maintain this array seperatly nice and cleanly
* @TODO
* set file types
*****************************************************************************************/

//customized load for ecf
ecf_load(){
	$files = func_get_args();
	queue('ecf', $files );	
}

// now load efc like so:
ecf_load('ecf-input');

