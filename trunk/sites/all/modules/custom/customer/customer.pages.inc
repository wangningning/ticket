<?php 
/*
 * @file
 */

/**
 * Product 
 */
function product_page(){
	$output = '';
	module_load_include('inc', 'common', 'common.func');
	
	$argument = arg();
	if($argument[1] == "new"){
		$output = 'new';
	}
	else if($argument[1] == "boy"){
		$output = 'boy';
	}
	else if($argument[1] == "girl"){
		$output = 'girl';
	}
	else if($argument[1] == "adult"){
		$output = 'adult';
	}
	else{
		$output = 'aaaaaaaaa';
	}
	return $output;
}
