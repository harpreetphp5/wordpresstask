<?php
if(isset($_POST)){
$path = preg_replace('/wp-content(?!.*wp-content).*/','',__DIR__);
include($path.'wp-load.php');
echo get_current_user_id();
	$data = json_decode(stripslashes($_POST["data"]));
	
    //print_r($data);
	$mypost = array(
      'comment_status'  => 'closed',
      'ping_status'   => 'closed',
      'post_author'   => 1,
      'post_title'    => $data->myName,
      'post_content'  => $data->myPhone,
      'post_status'   => 'publish',
      'post_type'   => 'post'
    );

	$id = wp_insert_post($mypost);
    
    die();

}

?>