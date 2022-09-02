<?php 
switch ($post_type) {
	case 'centers':
	case 'projects':
	case 'topics':include_once('index_bank.php');break;
	default:include_once('index_default.php');break;
}?>