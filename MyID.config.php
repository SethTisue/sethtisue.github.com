<?php
// IF YOU HAVE NOT DONE SO, PLEASE READ THE README FILE FOR DIRECTIONS!!!

/**
 * phpMyID - A standalone, single user, OpenID Identity Provider
 *
 * @package phpMyID
 * @author CJ Niemira <siege (at) siege (dot) org>
 * @copyright 2006-2008
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @url http://siege.org/projects/phpMyID
 * @version 2
 */


/**
 * User profile
 * @name $profile
 * @global array $GLOBALS['profile']
 */
$GLOBALS['profile'] = array(
	# Basic Config - Required
	'auth_username'	=> 	'SethTisue',
	'auth_password' =>	'b95c94b73ccce42bc614e0940d794339',

	# Optional Config - Please see README before setting these
#	'microid'	=>	array('mailto:user@site', 'http://delegator'),
#	'pavatar'	=>	'http://your.site.com/path/pavatar.img',

	# Advanced Config - Please see README before setting these
#	'allow_gmp'	=>	false,
#	'allow_test'	=> 	false,
#	'allow_suhosin'	=>	false,
#	'auth_realm'	=>	'phpMyID',
#	'force_bigmath'	=>	false,
#	'idp_url'	=>	'http://your.site.com/path/MyID.config.php',
#	'lifetime'	=>	1440,
#	'paranoid'	=>	false, # EXPERIMENTAL

	# Debug Config - Please see README before setting these
#	'debug'		=>	false,
#	'logfile'	=>	'/tmp/phpMyID.debug.log',
);

/**
 * Simple Registration Extension
 * @name $sreg
 * @global array $GLOBALS['sreg']
 */
$GLOBALS['sreg'] = array (
	'nickname'		=> 'Seth',
	'email'			=> 'seth@tisue.net',
	'fullname'		=> 'Seth Tisue',
	'dob'			=> '1971-08-29',
	'gender'		=> 'M',
	'postcode'		=> '02139',
	'country'		=> 'US',
	'language'		=> 'en',
	'timezone'		=> 'America/Boston'
);

require('MyID.php');
?>
