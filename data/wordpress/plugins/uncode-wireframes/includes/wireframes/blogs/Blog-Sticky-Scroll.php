<?php
/**
 * name             - Wireframe title
 * cat_name         - Comma separated list for multiple categories (cat display name)
 * custom_class     - Space separated list for multiple categories (cat ID)
 * dependency       - Array of dependencies
 * is_content_block - (optional) Best in a content block
 *
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$wireframe_categories = UNCDWF_Dynamic::get_wireframe_categories();
$data                 = array();

// Wireframe properties

$data[ 'name' ]             = esc_html__( 'Blog Sticky Scroll', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'blogs' ];
$data[ 'custom_class' ]     = 'blogs';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'blogs/Blog-Sticky-Scroll.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="100" back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" overlay_alpha="50" gutter_size="3" column_width_percent="100" shift_y="0" z_index="0" uncode_shortcode_id="343377" back_color_type="uncode-palette"][vc_column column_width_percent="100" position_vertical="middle" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/1" uncode_shortcode_id="134230"][uncode_index el_id="index-871681" index_type="sticky-scroll" loop="size:10|order_by:date|post_type:post|taxonomy_count:10" sticky_th_grid_lg="3" sticky_th_grid_md="2" sticky_th_grid_sm="1" gutter_size="4" sticky_scroll_v_align="middle" post_items="media|featured|onpost|original,date,title" single_overlay_opacity="50" single_overlay_anim="no" single_image_magnetic="yes" single_padding="1" single_title_dimension="h3" single_meta_custom_typo="yes" single_meta_size="large" single_border="yes" single_css_animation="alpha-anim" single_animation_speed="800" horizontal_th_size="grid" uncode_shortcode_id="205409"][/vc_column][/vc_row]
';

// Check if this wireframe is for a content block
if ( $data[ 'is_content_block' ] && ! $is_content_block ) {
	$data[ 'custom_class' ] .= ' for-content-blocks';
}

// Check if this wireframe requires a plugin
foreach ( $data[ 'dependency' ]  as $dependency ) {
	if ( ! UNCDWF_Dynamic::has_dependency( $dependency ) ) {
		$data[ 'custom_class' ] .= ' has-dependency needs-' . $dependency;
	}
}

vc_add_default_templates( $data );
