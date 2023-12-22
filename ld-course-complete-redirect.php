<?php 

add_action( 'learndash_course_completion_url', 'my_course_completion_redirect', 10, 2 );

function my_course_completion_redirect( $link, $course_id ) {
	$link =  home_url('/my-account');
	return $link;
}

?>
