<?php
/**
* Dynamic Block Template.
* @param   array $attributes - A clean associative array of block attributes.
* @param   array $block - All the block settings and attributes.
* @param   string $content - The block inner HTML (usually empty unless using inner blocks).
*/

$meta = $attributes["post_meta_name"];

?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php
		$post_id = get_the_ID();
		$meta_content = get_post_meta( $post_id, $meta, true );

		// var_dump( $meta_content );

		if( ! empty( $meta_content ) ) {
			$content = $meta_content;
		}
	?>
	<?php echo $content; ?>
</p>
