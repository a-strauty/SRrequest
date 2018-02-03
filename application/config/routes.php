<?php
defined('BASEPATH') OR exit('No direct script access allowed');



//Salesrep lookup
$route['sr'] = 'sr';
//Salesrep request review
$route['review'] = 'review/review';
//Homepage and basic settings
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
