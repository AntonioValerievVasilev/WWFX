<?php if($max_num_pages > 1) { ?>
	<div class="edgtf-blog-pag-loading">
		<div class="edgtf-blog-pag-bounce1"></div>
		<div class="edgtf-blog-pag-bounce2"></div>
		<div class="edgtf-blog-pag-bounce3"></div>
	</div>
	<div class="edgtf-blog-pag-load-more">
		<?php
			$button_params = array(
				'link' => 'javascript: void(0)',
				'type' => 'outline',
				'size' => 'medium',
				'text' => esc_html__('Load More', 'cinerama')
			);
			
			echo cinerama_edge_return_button_html( $button_params );
		?>
	</div>
<?php }