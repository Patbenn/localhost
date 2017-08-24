<?php

/**
*  
*  This is just a simple config file to store your web root and a few other items
*  
*  Change "/www/sites/*" to the directory where you keep your sites. 
*  Add multiple directories like this:
*  
*  $dir = array("/www/sites1/*","/www/sites2/*");
*  
*/

/** LocalHomePage root **/
$projroot = './';

/** directory name(s) */
$dir = array("/Applications/MAMP/htdocs/localhost/*");
					
/** Your local port */
$tld = '80';

/*
*
*  Icon file names you would like to display next to the link to each site. 
*  In order of the priority they should be used.
*
*/
$icons = array( 'logo.ico', 'favicon.ico' );

/*
*
*  Development tools you want displayed in the top navigation bar. Each item should be
*  an array containing keys 'name' and 'url'. An example is included (commented out) below.
*
*/
$devtools = array(
	array( 'name' => 'BISTrainer', 'url' => 'http://www.bistrainer.com/' ),
	array( 'name' => 'BISTrainer test', 'url' => 'http://test.bistrainer.com/' ),
	array( 'name' => 'BISTrainer dev', 'url' => 'http://bisdev.techversantinfotech.com'),
	array( 'name' => '1and1', 'url' => 'http://www.1and1.com/' ),
	array( 'name' => 'Get My Time', 'url' => 'http://www.getmytime.com/'),
	array( 'name' => 'DreamsTime', 'url' => 'http://www.Dreamstime.com/' ),
	array( 'name' => 'JIRA', 'url' => 'https://bistrainer.atlassian.net/secure/Dashboard.jspa'),
	array( 'name' => 'StackOverflow', 'url' => 'https://stackoverflow.com/')
	);

/*
*
*  Options for sites being displayed. These are completely optional, if you don't set
*  anything there are default options which will take over.
*
*  If you only want to specify a display name for a site you can use the format:
*
*  'sitedir' => 'Display Name',
*
*  Otherwise, if you want to set additional options you'll use an array for the options.
*
*  'sitedir' => array( 'displayname' => 'Display Name', 'adminurl' => 'http://example.sites.dev/admin' ),
*
*/			
$siteoptions = array(
'bisclone' => array( 'displayname' => 'BIStrainer Clone', 'type' => 'BIStrainer' ),
'builder' => 'Form Builder',
'respondent' => 'Form Respondent View', 
'errors' => 'Form Respondent Error View', 
'print' => 'Form Respondent Printed View', 
'labelExample' => 'Form Field Inline Label Example', 
'coldfusion' => 'ColdFusion', 
'greyBordersSpacing' => 'Grey Borders Spacing', 
'greenSuccessModal' => 'Success and Warning Modals', 
'newFormDefault' => 'New Default Form CSS', 
'wufooFormStore' => 'Form Store Design - Wufoo', 
'formStore' => 'BIStrainer Form Store', 
//	'dirname' => array( 'displayname' => 'DisplayName', 'adminurl' => 'http://something/admin' ),

	);

/*
*
*  Directory names of sites you want to hide from the page. If you're using multiple directories
*  in $dir be aware that any directory names in the array below that show up in any of 
*  your directories will be hidden.
* 
*/
$hiddensites = array( 'css','views','forms' );
$bistrainer = array ( 'bisclone', 'builder', 'respondent', 'errors', 'print', 'newFormDefault', 'formStore' );
$learning = array ( 'AngularJS', 'coldfusion' );
$ideas = array ( 'labelExample', 'greyBordersSpacing', 'greenSuccessModal', 'wufooFormStore'  );