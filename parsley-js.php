<?php
/*
Documentation
http://parsleyjs.org/doc/index.html
*/

function parsley( $required, $type = 'text', $minlength = 0, $maxlength = 0 ) {
	$return = '';
	//required or not
	if ( $required == 'true' ) {
		$return = $return . 'data-parsley-required="true"'; // required and validate
	} else {
		$return = $return . 'data-parsley-required="false"'; // not required but validate
	}
	// type
	if ( $type == 'text' ) {
		//$return=$return.' data-parsley-type="text"';	
	} elseif ( $type == 'email' ) {
		$return = $return . ' data-parsley-type="email"';
	} elseif ( $type == 'url' ) {
		$return = $return . ' data-parsley-type="url"';
	} elseif ( $type == 'integer' ) {
		$return = $return . ' data-parsley-type="integer"';
	} elseif ( $type == 'digits' ) {
		$return = $return . ' data-parsley-type="digits"';
	}
	// minlength maxlength
	if ( $minlength != 0 && $maxlength == 0 && $type != 'check' ) {
		// only minlength
		$return = $return . ' data-parsley-minlength="' . $minlength . '"';
	} elseif ( $minlength == 0 && $maxlength != 0 && $type != 'check' ) {
		// only maxlength
		$return = $return . ' data-parsley-maxlength="' . $minlength . '"';
	} elseif ( $minlength != 0 && $maxlength != 0 && $type != 'check' ) {
		// only maxlength
		$return = $return . ' data-parsley-length="[' . $minlength . ', ' . $maxlength . ']"';
	} elseif ( $minlength != 0 && $maxlength == 0 && $type == 'check' ) {
		// only minlength
		$return = $return . ' data-parsley-mincheck="' . $minlength . '"';
	} elseif ( $minlength == 0 && $maxlength != 0 && $type == 'check' ) {
		// only maxlength
		$return = $return . ' data-parsley-maxcheck="' . $minlength . '"';
	} elseif ( $minlength != 0 && $maxlength != 0 && $type == 'check' ) {
		// only maxlength
		$return = $return . ' data-parsley-check="[' . $minlength . ', ' . $maxlength . ']"';
	}
	echo $return;
}
?>
