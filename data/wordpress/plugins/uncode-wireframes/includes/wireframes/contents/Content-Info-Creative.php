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

$data[ 'name' ]             = esc_html__( 'Content Info Creative', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'contents' ];
$data[ 'custom_class' ]     = 'contents';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'contents/Content-Info-Creative.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="100" override_padding="yes" h_padding="0" top_padding="0" bottom_padding="0" back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="50" equal_height="yes" gutter_size="0" column_width_percent="100" shift_y="0" z_index="0" uncode_shortcode_id="296071" back_color_type="uncode-palette"][vc_column column_width_percent="100" position_vertical="middle" gutter_size="4" override_padding="yes" column_padding="5" style="dark"  overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/2" uncode_shortcode_id="179596"][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="4" shift_y="0" z_index="0" uncode_shortcode_id="469261" limit_content=""][vc_column_inner column_width_percent="100" gutter_size="3" style="dark" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="4" mobile_width="4" width="1/2" uncode_shortcode_id="176516"][vc_column_text uncode_shortcode_id="846272"]From Italy[/vc_column_text][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" style="dark" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="4" mobile_width="4" width="1/2" uncode_shortcode_id="102690"][vc_column_text uncode_shortcode_id="811276"]2005[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-155944' ) .'" uncode_shortcode_id="158866"]Medium length headline[/vc_custom_heading][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="4" shift_y="0" z_index="0" uncode_shortcode_id="201564" limit_content=""][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="4" mobile_width="0" width="1/2" uncode_shortcode_id="470055"][vc_empty_space empty_h="3" medium_visibility="yes" mobile_visibility="yes"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-five" uncode_shortcode_id="738595"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" style="dark" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="4" mobile_width="0" width="1/2" uncode_shortcode_id="422445"][vc_column_text uncode_shortcode_id="925954"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more. Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more.</p>
<p>Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more.[/vc_column_text][vc_button border_width="0" uncode_shortcode_id="128354"]Click the button[/vc_button][/vc_column_inner][/vc_row_inner][/vc_column][vc_column column_width_percent="100" gutter_size="3" back_image="'. uncode_wf_print_single_image( '80471' ) .'" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/2" uncode_shortcode_id="798015" mobile_height="400"][/vc_column][/vc_row]
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