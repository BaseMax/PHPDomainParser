<?php
// https://github.com/BaseMax/PHPDomainParser
function check($allowed,$input) {
	foreach($allowed as $d) {
		if(substr($input,-strlen($d))===$d)
			return true;
	}
	return false;
}

$allowed=[
	'google.com',
	'yahoo.com'
	'*.yahoo.com',
];
$input='panel.google.com';
var_dump(check($allowed,$input));
