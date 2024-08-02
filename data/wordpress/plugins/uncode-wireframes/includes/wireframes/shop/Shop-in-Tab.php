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

$data[ 'name' ]             = esc_html__( 'Shop in Tab', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'shop' ];
$data[ 'custom_class' ]     = 'shop';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'shop/Shop-in-Tab.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="0" override_padding="yes" h_padding="5" top_padding="4" bottom_padding="4" overlay_alpha="50" gutter_size="3" column_width_percent="100" shift_y="0" z_index="0" uncode_shortcode_id="162574"][vc_column column_width_percent="100" gutter_size="0" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/1" uncode_shortcode_id="139466"][vc_tabs tabs_event="box-resized" no_lazy="yes" tab_scrolling="yes" animation_active="yes" typography="advanced" align="left" titles_ titles_size="h6" titles_weight="600" gutter_simple="0" uncode_shortcode_id="129072"][vc_tab gutter_size="2" column_padding="3" title="News" tab_id="1679043445575-6-3"][uncode_index el_id="index-1111" index_type="css_grid" loop="size:4|order_by:date|post_type:product" screen_lg_items="2" screen_lg_breakpoint="1200" screen_md_items="2" screen_md_breakpoint="600" screen_sm_items="1" screen_sm_breakpoint="480" gutter_size="2" post_items="media|featured|onpost|original,title,category|nobg|relative|display-icon,date,text|excerpt,sep-one|full,extra" product_items="media|featured|onpost|original|hide-sale|enhanced-atc|fluid-w-atc|atc-typo-column|hide-atc,stars,title,price|inline_responsive,quick-view-button,wishlist-button,spacer|half" css_grid_images_size="four-five" single_shape="round" single_overlay_opacity="50" single_overlay_anim="no" single_text_visible="yes" single_text_anim="no" single_image_anim="no" single_secondary="yes" single_padding="1" single_title_semantic="h4"  single_title_dimension="h6" single_border="yes" single_animation_sequential="no" custom_order="yes" uncode_shortcode_id="130104" order_ids="111366,111375,111236,111050"][/vc_tab][vc_tab gutter_size="2" column_padding="3" title="Jackets" tab_id="1679043412771-4-10"][uncode_index el_id="index-2222" index_type="css_grid" loop="size:4|post_type:product" screen_lg_items="2" screen_lg_breakpoint="1200" screen_md_items="2" screen_md_breakpoint="600" screen_sm_items="1" screen_sm_breakpoint="480" gutter_size="2" post_items="media|featured|onpost|original,title,category|nobg|relative|display-icon,date,text|excerpt,sep-one|full,extra" product_items="media|featured|onpost|original|hide-sale|enhanced-atc|fluid-w-atc|atc-typo-column|hide-atc,stars,title,price|inline,quick-view-button,wishlist-button,spacer|half" css_grid_images_size="four-five" single_shape="round" single_overlay_opacity="50" single_overlay_anim="no" single_text_visible="yes" single_text_anim="no" single_image_anim="no" single_secondary="yes" single_padding="1" single_title_semantic="h4" single_title_dimension="h6" single_border="yes" single_animation_sequential="no" custom_order="yes" woo_single_variations="yes" woo_single_variations_hide_parent="yes" uncode_shortcode_id="599957" order_ids="111366,111375,111236,111050"][/vc_tab][vc_tab gutter_size="2" column_padding="3" title="Sneakers" tab_id="1679043398636-3-8"][uncode_index el_id="index-3333" index_type="css_grid" loop="size:4|post_type:product" screen_lg_items="2" screen_lg_breakpoint="1200" screen_md_items="2" screen_md_breakpoint="600" screen_sm_items="1" screen_sm_breakpoint="480" gutter_size="2" post_items="media|featured|onpost|original,title,category|nobg|relative|display-icon,date,text|excerpt,sep-one|full,extra" product_items="media|featured|onpost|original|hide-sale|enhanced-atc|fluid-w-atc|atc-typo-column|hide-atc,stars,title,price|inline,quick-view-button,wishlist-button,spacer|half" css_grid_images_size="four-five" single_shape="round" single_overlay_opacity="50" single_overlay_anim="no" single_text_visible="yes" single_text_anim="no" single_image_anim="no" single_secondary="yes" single_padding="1" single_title_semantic="h4" single_title_dimension="h6" single_border="yes" single_animation_sequential="no" custom_order="yes" woo_single_variations="yes" woo_single_variations_hide_parent="yes" uncode_shortcode_id="190116" order_ids="111366,111375,111236,111050"][/vc_tab][vc_tab gutter_size="2" column_padding="3" title="Backpacks" tab_id="1679043426180-5-8"][uncode_index el_id="index-4444" index_type="css_grid" loop="size:4|post_type:product" screen_lg_items="2" screen_lg_breakpoint="1200" screen_md_items="2" screen_md_breakpoint="600" screen_sm_items="1" screen_sm_breakpoint="480" gutter_size="2" post_items="media|featured|onpost|original,title,category|nobg|relative|display-icon,date,text|excerpt,sep-one|full,extra" product_items="media|featured|onpost|original|hide-sale|enhanced-atc|fluid-w-atc|atc-typo-column|hide-atc,stars,title,price|inline,quick-view-button,wishlist-button,spacer|half" css_grid_images_size="four-five" single_shape="round" single_overlay_opacity="50" single_overlay_anim="no" single_text_visible="yes" single_text_anim="no" single_image_anim="no" single_secondary="yes" single_padding="1" single_title_semantic="h4" single_title_dimension="h6" single_border="yes" single_animation_sequential="no" custom_order="yes" woo_single_variations="yes" woo_single_variations_hide_parent="yes" uncode_shortcode_id="883499" order_ids="111366,111375,111236,111050"][/vc_tab][vc_tab gutter_size="2" column_padding="3" title="Cameras" tab_id="1671548483489-0-91672152573360"][uncode_index el_id="index-5555" index_type="css_grid" loop="size:4|post_type:product" screen_lg_items="2" screen_lg_breakpoint="1200" screen_md_items="2" screen_md_breakpoint="600" screen_sm_items="1" screen_sm_breakpoint="480" gutter_size="2" post_items="media|featured|onpost|original,title,category|nobg|relative|display-icon,date,text|excerpt,sep-one|full,extra" product_items="media|featured|onpost|original|hide-sale|enhanced-atc|fluid-w-atc|atc-typo-column|hide-atc,stars,title,price|inline,quick-view-button,wishlist-button,spacer|half" css_grid_images_size="four-five" single_shape="round" single_overlay_opacity="50" single_overlay_anim="no" single_text_visible="yes" single_text_anim="no" single_image_anim="no" single_secondary="yes" single_padding="1" single_title_semantic="h4" single_title_dimension="h6" single_border="yes" single_animation_sequential="no" custom_order="yes" woo_single_variations="yes" woo_single_variations_hide_parent="yes" uncode_shortcode_id="187260" order_ids="111366,111375,111236,111050"][/vc_tab][vc_tab gutter_size="2" column_padding="3" title="Bikes" tab_id="1671548483061-0-51672152573360"][uncode_index el_id="index-6666" index_type="css_grid" loop="size:4|order_by:date|post_type:product" screen_lg_items="2" screen_lg_breakpoint="1200" screen_md_items="2" screen_md_breakpoint="600" screen_sm_items="1" screen_sm_breakpoint="480" gutter_size="2" post_items="media|featured|onpost|original,title,category|nobg|relative|display-icon,date,text|excerpt,sep-one|full,extra" product_items="media|featured|onpost|original|hide-sale|enhanced-atc|fluid-w-atc|atc-typo-column|hide-atc,stars,title,price|inline,quick-view-button,wishlist-button,spacer|half" css_grid_images_size="four-five" single_shape="round" single_overlay_opacity="50" single_overlay_anim="no" single_text_visible="yes" single_text_anim="no" single_image_anim="no" single_secondary="yes" single_padding="1" single_title_semantic="h4" single_title_dimension="h6" single_border="yes" single_animation_sequential="no" custom_order="yes" woo_single_variations="yes" woo_single_variations_hide_parent="yes" uncode_shortcode_id="190458" order_ids="111366,111375,111236,111050"][/vc_tab][vc_tab gutter_size="2" column_padding="3" title="Sunglasses" tab_id="1671548483266-0-31672152573360"][uncode_index el_id="index-7777" index_type="css_grid" loop="size:4|post_type:product" screen_lg_items="2" screen_lg_breakpoint="1200" screen_md_items="2" screen_md_breakpoint="600" screen_sm_items="1" screen_sm_breakpoint="480" gutter_size="2" post_items="media|featured|onpost|original,title,category|nobg|relative|display-icon,date,text|excerpt,sep-one|full,extra" product_items="media|featured|onpost|original|hide-sale|enhanced-atc|fluid-w-atc|atc-typo-column|hide-atc,stars,title,price|inline,quick-view-button,wishlist-button,spacer|half" css_grid_images_size="four-five" single_shape="round" single_overlay_opacity="50" single_overlay_anim="no" single_text_visible="yes" single_text_anim="no" single_image_anim="no" single_secondary="yes" single_padding="1" single_title_semantic="h4" single_title_dimension="h6" single_border="yes" single_animation_sequential="no" custom_order="yes" woo_single_variations="yes" woo_single_variations_hide_parent="yes" uncode_shortcode_id="206800" order_ids="111366,111375,111236,111050"][/vc_tab][/vc_tabs][/vc_column][/vc_row]
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