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

$data[ 'name' ]             = esc_html__( 'Tabs Vertical with Images Grid', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'tabs-accordions' ];
$data[ 'custom_class' ]     = 'tabs-accordions';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'tabs-accordions/Tabs-Vertical-with-Images-Grid.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="0" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" overlay_alpha="50" gutter_size="3" column_width_use_pixel="yes" shift_y="0" z_index="0" uncode_shortcode_id="757030" el_class="test-zero" column_width_pixel="1700"][vc_column column_width_percent="100" gutter_size="3"  overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" css_animation="alpha-anim" animation_speed="1000" width="1/1" uncode_shortcode_id="196295"][vc_tabs vertical="yes" typography="advanced" tab_no_border="yes" tab_h_border="yes" valign_middle="yes" tabs_align="opposite" tab_custom_size="yes" tab_size="6" tab_gap="4" custom_padding="yes" gutter_tab="2" no_h_padding="yes" tab_tablet_bp="yes" accordion_bp="yes" titles_size="h3" titles_weight="600" excerpt_text_size="'. uncode_wf_print_font_size( 'yes' ) .'" gutter_simple="1" uncode_shortcode_id="135500"][vc_tab gutter_size="2" column_padding="0" title="Different and unusual point of view" tab_id="1671531983-1-92167282140965916740348175361715594665539" excerpt="Credibly reintermediate backend ideas for cross-platform models. Continually reintermediate integrated processes through technically sound intellectual capital. Holistically foster superior methodologies without market-driven best practices."][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="7/12" uncode_shortcode_id="166455"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="127604"][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="5/12" uncode_shortcode_id="476475"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-five" uncode_shortcode_id="616338"][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="4/12" uncode_shortcode_id="139510"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" uncode_shortcode_id="114532"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="8/12" uncode_shortcode_id="866731"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="165167"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab gutter_size="2" column_padding="0" tab_id="0663c43b-975a-41715594665539" title="Use red for interactions and intimacy" excerpt="Distinctively exploit optimal alignments for intuitive bandwidth. Quickly coordinate e-business applications through revolutionary catalysts for change. Seamlessly underwhelm optimal testing procedures whereas bricks-and-clicks processes."][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="5/12" uncode_shortcode_id="638662"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-five" uncode_shortcode_id="100192"][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="7/12" uncode_shortcode_id="166455"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="643531"][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="8/12" uncode_shortcode_id="866731"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="143553"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="4/12" uncode_shortcode_id="139510"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" uncode_shortcode_id="479696"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab gutter_size="2" column_padding="0" title="Juxtaposition with primary colours" tab_id="1671535938245-2-1167282140965916740348175361715594665539" excerpt="Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures."][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="7/12" uncode_shortcode_id="166455"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="829091"][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="5/12" uncode_shortcode_id="131256"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-five" uncode_shortcode_id="100185"][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="4/12" uncode_shortcode_id="139510"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" uncode_shortcode_id="172465"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="8/12" uncode_shortcode_id="866731"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="171270"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab gutter_size="2" column_padding="0" title="Geometry, lines, shapes, graphics" tab_id="1671531983-2-89167282140965916740348175361715594665539" excerpt="Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products."][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="5/12" uncode_shortcode_id="563768"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-five" uncode_shortcode_id="154451"][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="7/12" uncode_shortcode_id="166455"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="203994"][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="8/12" uncode_shortcode_id="866731"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="217770"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="4/12" uncode_shortcode_id="139510"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" uncode_shortcode_id="139216"][/vc_column_inner][/vc_row_inner][/vc_tab][vc_tab gutter_size="2" column_padding="0" tab_id="cc6c7f5d-12ad-31715594665539" title="Modern black and white techniques" excerpt="Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service."][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="7/12" uncode_shortcode_id="166455"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="143724"][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="5/12" uncode_shortcode_id="399680"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-five" uncode_shortcode_id="120163"][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="2" shift_y="0" z_index="0" limit_content=""][vc_column_inner column_width_percent="100" gutter_size="2" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="3" mobile_width="3" width="4/12" uncode_shortcode_id="139510"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" uncode_shortcode_id="542116"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="5" mobile_width="5" width="8/12" uncode_shortcode_id="866731"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" uncode_shortcode_id="437916"][/vc_column_inner][/vc_row_inner][/vc_tab][/vc_tabs][/vc_column][/vc_row]
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