<?php 
switch ($post_type) {
	case 'centers':
	case 'projects':
	case 'topics':
		include_once('single_bank.php');
		break;
	
	default:
		include_once('single_default.php');
		break;
}
?>