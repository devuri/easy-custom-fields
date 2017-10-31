<?php
/*
* EASY CUSTOM FIELDS
*   Input field
* EXAMPLE
*   echo '<pre>'. ecf_input('email', 'Enter Your Email', 'InputName');
*   echo ecf_input(); // defaults
* PARAMETERS
*   @param string type
*   @param string label
*   @param string name
*   @param string val
*   @param string input_class
*   @param string input_id
*   @param string divclass
*   @param string label_class
* @author Uriel Wilson Jr <urielwilsonjr at gmail dot com>
* @license LGPL version 2 or greater <http://www.gnu.org/licenses/lgpl.html>
********************************************************/
 function ecf_input($ar = array()){
   // get the function params
    $att  = func_get_args();
/*
*  Set the Defualt Values here
*------------------------------------
*  @param string type
*  @param string label
*  @param string name
*  @param string val
*  @param string input_class
*  @param string input_id
*  @param string divclass
*  @param string label_class
*  @output
*  <div class="ecfdiv">
   <label class="ecflabel">
   Example
   </label>
   <input id="inputID" name="InputName" value=" " class="inputclass" type="text">
   </div>
*  @output
*************************************/
  $def = array(
    'text',
    'Example',
    'InputName',
    ' ',
    'inputclass',
    'inputID',
    'ecfdiv',
    'ecflabel'
  );
//merge the default and user defined
$ecfparams = array_replace($def, $att);
  /*
  *  Set Some sensible Names for new Vars
  *------------------------------------
  *  @param string type
  *  @param string label
  *  @param string name
  *  @param string val
  *  @param string input_class
  *  @param string input_id
  *  @param string divclass
  *  @param string label_class
  *************************************/
  $type         = $ecfparams[0];
  $label        = $ecfparams[1];
  $name         = $ecfparams[2];
  $val          = $ecfparams[3];
  $inputclass   = $ecfparams[4];
  $inputid      = $ecfparams[5];
  $divclass     = $ecfparams[6];
  $labelclass   = $ecfparams[7];
  /*
  *  Lets Build our Input field
  *************************************/
  $get_input  = '';
  $get_input .= '<div class="'.$divclass.'">';
  $get_input .= '<label class="'.$labelclass.'"> '.$label.'  </label>';
  $get_input .= '<input id="'.$inputid.'" name="'.$name.'" value="'.$val.'" class="'.$inputclass.'" type="'.$type.'">';
  $get_input .= '</div>';
// get the field
  return $get_input;
}
