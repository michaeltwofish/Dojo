<?php $theme->display('header'); ?>

	<?php
	foreach ( $posts as $post ) {
		$theme->content($post);
	}
	?>

<?php $theme->display('footer'); ?>
