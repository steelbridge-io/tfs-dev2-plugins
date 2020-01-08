<?php
/**
* Description: Basic Template Custom Meta Fields
*
* @package		tfsBasic
* @since			1.2.8
* @author			Chris Parsons
* @link				http://steelbridge.io
* @license		GNU General Public License
*/

include( plugin_dir_path( __FILE__ ) . 'inc/sanitize_fields_basic.php');

// Adds a meta box to the post editing screen on the template named basic-page-template
function tfs_custom_basic_meta() {
	  global $post;
	  if(!empty($post)){
		  $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
		  if($pageTemplate == 'page-templates/basic-page-template.php') {
				$types = array('post', 'page', 'travel_cpt', 'schools_cpt', 'adventures', 'guide_service', 'fishcamp_cpt');
				foreach($types as $type) {
				add_meta_box( 'basic_meta', __( 'Basic Template Options &amp; Content', 'tfs-basic-textdomain' ), 'tfs_basic_meta_callback', $type, 'normal', 'high' );
			}
		}
  }
}
add_action( 'add_meta_boxes', 'tfs_custom_basic_meta' );
	
// Outputs the content of the meta box
function tfs_basic_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'basic_nonce' );
    $sbm_stored_basic_meta = get_post_meta( $post->ID );
?>

	<div style="margin-top: 1.618em;">
	<h1>Basic Template Custom Content</h1>
	</div>
	
	<!-- description -->
	<p>
	
	<strong><label for="basic-page-description" class="basic-row-title"><?php _e('Page Description','tfs-basic-textdomain')?></label></strong>
	
	<input style="width: 100%;" type="text" name="basic-page-description" id="basic-page-description" value="<?php if (isset($sbm_stored_basic_meta['basic-page-description'])) echo $sbm_stored_basic_meta['basic-page-description'][0]; ?>" />
	</p>

	<p>
	
	<hr style="margin-top: 1.618em; border-top: 3px double #8c8b8b;">
	
	<!-- ==== Add CTA section ==== -->
	<p>

	<span class="basic-row-title"><?php _e( '<strong>Display CTA section</strong>', 'tfs-basic-textdomain' )?></span>
	<div class="basic-row-content">
	<label for="basic-cta-checkbox">
	<input type="checkbox" name="basic-cta-checkbox" id="basic-cta-checkbox" value="yes" <?php if ( isset ( $sbm_stored_basic_meta['basic-cta-checkbox'] ) ) checked( $sbm_stored_basic_meta['basic-cta-checkbox'][0], 'yes' ); ?> />
	<?php _e( 'Check box to activate CTA section.', 'tfs-basic-textdomain' )?>
	</label>
	</label>
	</div>

	</p>
	
	<!-- CTA title -->
	<p>
	
	<strong><label for="basic-cta-title" class="basic-row-title"><?php _e('Call To Action Tilte','tfs-basic-textdomain')?></label></strong>
	<input style="width: 100%;" type="text" name="basic-cta-title" id="basic-cta-title" value="<?php if (isset($sbm_stored_basic_meta['basic-cta-title'])) echo $sbm_stored_basic_meta['basic-cta-title'][0]; ?>" />
	</p>

	<p>

	<!-- CTA content -->
	<strong><label for="basic-cta-content" class="basic-row-title"><?php _e( 'CTA Content', 'tfs-basic-textdomain' )?></label></strong>
	<textarea style="width: 100%;" rows="4" name="basic-cta-content" id="basic-cta-content"><?php if ( isset ( $sbm_stored_basic_meta['basic-cta-content'] ) ) echo $sbm_stored_basic_meta['basic-cta-content'][0]; ?></textarea>

	</p>

<?php }