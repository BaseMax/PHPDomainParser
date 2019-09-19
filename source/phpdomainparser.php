<?php
// https://github.com/BaseMax/PHPDomainParser
$allowed=[
	'google.com',
	'yahoo.com'
];
$input='panel.google.com';

function check($allowed,$input) {
	foreach($allowed as $d) {
		if(substr($input,-strlen($d))===$d)
			return true;
	}
	return false;
}
var_dump(check($allowed,$input));
