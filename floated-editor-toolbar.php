<?php
/*
Plugin Name: Floated Editor Toolbar
Author: Takien
Version: 0.1
Author URI: http://takien.com/

*/
defined('ABSPATH') OR die();


add_action('admin_head','takien_floating_toolbar');
function takien_floating_toolbar() {
global $post_type;
if('post' == $post_type) {
echo '<style type="text/css">
#content_toolbargroup.takien_floating_toolbar,
#ed_toolbar.takien_floating_toolbar {
	width:100%;
	position:fixed;
	background:#e4e4e4;
	z-index:100000;
	top:0;
	left:0;
	width:100%;
}
.takien_floating_toolbar table.mceToolbar{
	float:left;
}
</style>';
?>
<script type="text/javascript">
jQuery(document).ready(function($){
	$(window).scroll(function(){
	var scroll = $(window).scrollTop();
		if(scroll < $('#content_parent,#wp-content-editor-container').offset().top) {
			$('#content_toolbargroup,#ed_toolbar').removeClass('takien_floating_toolbar');
		}
		else {
			$('#content_toolbargroup,#ed_toolbar').addClass('takien_floating_toolbar');
		}
	});
});

</script>
<?php
}
}