<?php

/**
 * SAVE AND SANITIZE
 * Saves the custom meta input for the Basic Page Template
 *
 */

function sbm_basic_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'basic_nonce' ] ) && wp_verify_nonce( $_POST[ 'basic_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
			return;
	}
	
	// Checks for input and sanitizes/saves for CTA content
    if( isset( $_POST[ 'basic-page-description' ] ) ) {
        update_post_meta( $post_id, 'basic-page-description', sanitize_text_field( $_POST[ 'basic-page-description' ] ) );
    }
	
	// Checks for input adn displays CTA
		if( isset( $_POST[ 'basic-cta-checkbox' ] ) ) {
				update_post_meta( $post_id, 'basic-cta-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'basic-cta-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves for CTA content
    if( isset( $_POST[ 'basic-cta-content' ] ) ) {
        update_post_meta( $post_id, 'basic-cta-content', sanitize_text_field( $_POST[ 'basic-cta-content' ] ) );
    }
	
	// Checks for input and sanitizes/saves for CTA content
    if( isset( $_POST[ 'basic-cta-title' ] ) ) {
        update_post_meta( $post_id, 'basic-cta-title', sanitize_text_field( $_POST[ 'basic-cta-title' ] ) );
    }
	
}
add_action( 'save_post', 'sbm_basic_meta_save' );