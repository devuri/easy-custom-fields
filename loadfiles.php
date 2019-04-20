<?php 
/*
* EASILY LOAD ALL FILES IN DIRECTORY
*  load all files in this directory
* EXAMPLE
*   load_functions($inc_dir) // defaults
* PARAMETERS
* @param $inc_dir string folder with files
* @license LGPL version 2 or greater <http://www.gnu.org/licenses/lgpl.html>
********************************************************/
function load_files($inc_dir='inc', $ftype='php'){
    foreach (glob($inc_dir . '*.'.$ftype) as $incfile)  {
        include $incfile;
    }
}
load_inc_files('inc','mp3');
