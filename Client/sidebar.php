<div id="sub-navigation" class="widget">
	
	<?php if (is_page()) : ?>
	<h2 class="sub-navigation-title">
	<?php echo get_the_title($post->post_parent);?>
	</h2>
	<ul class="sub-navigation-items">
		<?php if ($post->post_parent){
			wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __ ('')));
} else {
	wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
}?>
	</ul>
	<?php endif;
	
	
	if(get_post_meta($post->ID, 'Quote', true)):
	//check to see if there is a quote, in custom field on page?>
	<blockquote class="side-quote"><?php echo get_post_meta($post->ID, 'Quote', true);//The actual quote ?></blockquote>
	<?php endif;
	//end custom field quote ?>
	</div>
	