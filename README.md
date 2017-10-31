# Easy Custom Fields
Easy Custom Fields is a group of helper functions designed to make building forms much faster it includes some simple cleanup also (be sure to run your own security stuff ), You can generate input fields, get the value of input fields display user feed back on post actions etc, these functions are designed to make the development process less tedious and time consuming call an input field simple use ecf_input('email', 'Enter Your Email', 'InputName'); thats all it takes to render a simple email field
# Use
Simple Include the autoload file 
include_once(ecf_autoload.php);
* Load fields 
ecf_load('ecf-input');
this will load the input function, loading your functions this way aloows you to only use what you need.
* loading more than one ecf
ecf_load('ecf-input', 'ecf-post', 'ecf-clean-input');
this will load all 3 helpers you can then use 
* ecf_input('text', 'simtext', 'textname'); 
* ecf_clean_input('InputName'); 
* ecf_post('InputName'); 
