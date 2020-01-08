<?php
/**
* Description: Blog Template Custom Meta Fields
*
* @package		tfsBlog
* @since			1.3.0
* @author			Chris Parsons
* @link				http://steelbridge.io
* @license		GNU General Public License
*/

include( plugin_dir_path( __FILE__ ) . 'inc/sanitize_fields_blog.php');

// Adds a meta box to the post editing screen on the template named basic-page-template
function tfs_custom_blog_meta() {
	  global $post;
	  if(!empty($post)){
		  $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
		  if($pageTemplate == 'page-templates/blog-template.php') {
				$types = array('post', 'page');
				foreach($types as $type) {
				add_meta_box( 'blog_meta', __( 'Blog Template Options &amp; Content', 'tfs-blog-textdomain' ), 'tfs_blog_meta_callback', $type, 'normal', 'high' );
			}
		}
  }
}
add_action( 'add_meta_boxes', 'tfs_custom_blog_meta' );
	
// Outputs the content of the meta box
function tfs_blog_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'blog_nonce' );
    $sbm_stored_blog_meta = get_post_meta( $post->ID );
?>

	<div style="margin-top: 1.618em;">
	<h1>Blog Template Custom Content</h1>
	</div>
	
	<!-- description -->
	<p>
	
	<strong><label for="blog-description" class="basic-row-title"><?php _e('Blog Description','tfs-blog-textdomain')?></label></strong>
	
	<input style="width: 100%;" type="text" name="blog-description" id="blog-description" value="<?php if (isset($sbm_stored_blog_meta['blog-description'])) echo $sbm_stored_blog_meta['blog-description'][0]; ?>" />
	</p>

	<p>
	
	<hr style="margin-top: 1.618em; border-top: 3px double #8c8b8b;">
	
	<!-- ==== Add CTA section ==== -->
	<p>

	<span class="basic-row-title"><?php _e( '<strong>Display CTA section</strong>', 'tfs-blog-textdomain' )?></span>
	<div class="basic-row-content">
	<label for="basic-cta-checkbox">
	<input type="checkbox" name="basic-cta-checkbox" id="basic-cta-checkbox" value="yes" <?php if ( isset ( $sbm_stored_blog_meta['basic-cta-checkbox'] ) ) checked( $sbm_stored_blog_meta['basic-cta-checkbox'][0], 'yes' ); ?> />
	<?php _e( 'Check box to activate CTA section.', 'tfs-blog-textdomain' )?>
	</label>
	</label>
	</div>

	</p>
	
	<!-- CTA title -->
	<p>
	
	<strong><label for="basic-cta-title" class="basic-row-title"><?php _e('Call To Action Tilte','tfs-blog-textdomain')?></label></strong>
	<input style="width: 100%;" type="text" name="basic-cta-title" id="basic-cta-title" value="<?php if (isset($sbm_stored_blog_meta['basic-cta-title'])) echo $sbm_stored_blog_meta['basic-cta-title'][0]; ?>" />
	</p>

	<p>

	<!-- CTA content -->
	<strong><label for="basic-cta-content" class="basic-row-title"><?php _e( 'CTA Content', 'tfs-blog-textdomain' )?></label></strong>
	<textarea style="width: 100%;" rows="4" name="basic-cta-content" id="basic-cta-content"><?php if ( isset ( $sbm_stored_blog_meta['basic-cta-content'] ) ) echo $sbm_stored_blog_meta['basic-cta-content'][0]; ?></textarea>

	</p>

<?php }