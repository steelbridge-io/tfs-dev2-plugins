<?php
/*
* Sanitize Guide Service Meta Fields
*/
function sbm_guideservice_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'guideservice_nonce' ] ) && wp_verify_nonce( $_POST[ 'guideservice_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
	
	
		  // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
	
		/*=== GUIDE SERVICE DESCRIPTION ===*/
	
	// Checks for input and sanitizes/saves if needed 
    if( isset( $_POST[ 'guideservice-description' ] ) ) {
        update_post_meta( $post_id, 'guideservice-description', ( $_POST[ 'guideservice-description' ] ) );
    }
	
		/*=== GUIDE SERVICE FEATURE #1 ===*/
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs1-title' ] ) ) {
        update_post_meta( $post_id, 'feature-gs1-title',( $_POST[ 'feature-gs1-title' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs1-cost-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs1-cost-textarea',( $_POST[ 'feature-gs1-cost-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs1-inclusions-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs1-inclusions-textarea', ( $_POST[ 'feature-gs1-inclusions-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs1-noninclusions-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs1-noninclusions-textarea', ( $_POST[ 'feature-gs1-noninclusions-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs1-travelins-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs1-travelins-textarea', ( $_POST[ 'feature-gs1-travelins-textarea' ] ) );
    }	
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs1-packagedeal-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs1-packagedeal-textarea', ( $_POST[ 'feature-gs1-packagedeal-textarea' ] ) );
    }
	
		/*=== GUIDE SERVICE FEATURE #2 ===*/
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs2-title' ] ) ) {
        update_post_meta( $post_id, 'feature-gs2-title', ( $_POST[ 'feature-gs2-title' ] ) );
    }	
  
  // Checks for input and displays fall section
		if( isset( $_POST[ 'guide-readmore-option-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-readmore-option-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-readmore-option-checkbox', '' );
		}
  
  // Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs2-seasons-readmore' ] ) ) {
        update_post_meta( $post_id, 'feature-gs2-seasons-readmore', ( $_POST[ 'feature-gs2-seasons-readmore' ] ) );
    }	

	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs2-seasons-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs2-seasons-textarea', ( $_POST[ 'feature-gs2-seasons-textarea' ] ) );
    }
	
	// Checks for input and displays fall section
		if( isset( $_POST[ 'guide-optionfall-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-optionfall-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-optionfall-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs2-autumn-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs2-autumn-textarea', ( $_POST[ 'feature-gs2-autumn-textarea' ] ) );
    }	
	
	// Checks for input and displays sping section
		if( isset( $_POST[ 'guide-optionwinter-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-optionwinter-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-optionwinter-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs2-winter-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs2-winter-textarea', ( $_POST[ 'feature-gs2-winter-textarea' ] ) );
    }
	
	// Checks for input and displays sping section
		if( isset( $_POST[ 'guide-optionspring-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-optionspring-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-optionspring-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs2-spring-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs2-spring-textarea', ( $_POST[ 'feature-gs2-spring-textarea' ] ) );
    }	
	
	// Checks for input and displays sping section
		if( isset( $_POST[ 'guide-optionsummer-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-optionsummer-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-optionsummer-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs2-summer-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs2-summer-textarea', ( $_POST[ 'feature-gs2-summer-textarea' ] ) );
    }		
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-title' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-title', ( $_POST[ 'feature-gs3-title' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-gettingto-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-gettingto-textarea', ( $_POST[ 'feature-gs3-gettingto-textarea' ] ) );
    }
	
	// Checks for input and displays sping section
		if( isset( $_POST[ 'feature-gs3-readmore-checkbox' ] ) ) {
				update_post_meta( $post_id, 'feature-gs3-readmore-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'feature-gs3-readmore-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-readmore-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-readmore-textarea', ( $_POST[ 'feature-gs3-readmore-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-title' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-title', ( $_POST[ 'feature-gs3-fishing-title' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-textarea', ( $_POST[ 'feature-gs3-fishing-textarea' ] ) );
    }
	
	 // Checks for input and displays sping section
		if( isset( $_POST[ 'feature-gs3-fishing-readmore-checkbox' ] ) ) {
				update_post_meta( $post_id, 'feature-gs3-fishing-readmore-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'feature-gs3-fishing-readmore-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-readmore' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-readmore', ( $_POST[ 'feature-gs3-fishing-readmore' ] ) );
    }
	
 // Checks for input and displays fishing section
		if( isset( $_POST[ 'guide-option1-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-option1-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-option1-checkbox', '' );
		}
	
		// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'guide-fishing-beat1-label' ] ) ) {
        update_post_meta( $post_id, 'guide-fishing-beat1-label', ( $_POST[ 'guide-fishing-beat1-label' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-beat1' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-beat1', ( $_POST[ 'feature-gs3-fishing-beat1' ] ) );
    }
	
	// Checks for input and displays fishing section
		if( isset( $_POST[ 'guide-option2-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-option2-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-option2-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'guide-fishing-beat2-label' ] ) ) {
        update_post_meta( $post_id, 'guide-fishing-beat2-label', ( $_POST[ 'guide-fishing-beat2-label' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-beat2' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-beat2', ( $_POST[ 'feature-gs3-fishing-beat2' ] ) );
    }
	
	// Checks for input and displays fishing section
		if( isset( $_POST[ 'guide-option3-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-option3-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-option3-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'guide-fishing-beat3-label' ] ) ) {
        update_post_meta( $post_id, 'guide-fishing-beat3-label', ( $_POST[ 'guide-fishing-beat3-label' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-beat3' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-beat3', ( $_POST[ 'feature-gs3-fishing-beat3' ] ) );
    }
	
	// Checks for input and displays fishing section
		if( isset( $_POST[ 'guide-option4-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-option4-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-option4-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'guide-fishing-beat4-label' ] ) ) {
        update_post_meta( $post_id, 'guide-fishing-beat4-label', ( $_POST[ 'guide-fishing-beat4-label' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-beat4' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-beat4', ( $_POST[ 'feature-gs3-fishing-beat4' ] ) );
    }
	
	// Checks for input and displays fishing section
		if( isset( $_POST[ 'guide-option5-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-option5-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-option5-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'guide-fishing-beat5-label' ] ) ) {
        update_post_meta( $post_id, 'guide-fishing-beat5-label', ( $_POST[ 'guide-fishing-beat5-label' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-beat5' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-beat5', ( $_POST[ 'feature-gs3-fishing-beat5' ] ) );
    }
	
	 // Checks for input and displays fishing section
		if( isset( $_POST[ 'guide-option6-checkbox' ] ) ) {
				update_post_meta( $post_id, 'guide-option6-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'guide-option6-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'guide-fishing-beat6-label' ] ) ) {
        update_post_meta( $post_id, 'guide-fishing-beat6-label', ( $_POST[ 'guide-fishing-beat6-label' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs3-fishing-beat6' ] ) ) {
        update_post_meta( $post_id, 'feature-gs3-fishing-beat6', ( $_POST[ 'feature-gs3-fishing-beat6' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs4-title' ] ) ) {
        update_post_meta( $post_id, 'feature-gs4-title', ( $_POST[ 'feature-gs4-title' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs4-gettingto-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs4-gettingto-textarea', ( $_POST[ 'feature-gs4-gettingto-textarea' ] ) );
    }
	
	// Checks for input and displays sping section
		if( isset( $_POST[ 'feature-gs4-readmore-checkbox' ] ) ) {
				update_post_meta( $post_id, 'feature-gs4-readmore-checkbox', 'yes' );
		} else {
				update_post_meta( $post_id, 'feature-gs4-readmore-checkbox', '' );
		}
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs4-readmore-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs4-readmore-textarea', ( $_POST[ 'feature-gs4-readmore-textarea' ] ) );
    }
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs5-title' ] ) ) {
        update_post_meta( $post_id, 'feature-gs5-title', ( $_POST[ 'feature-gs5-title' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs5-fishing-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs5-fishing-textarea', ( $_POST[ 'feature-gs5-fishing-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs5-beat1-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs5-beat1-textarea', ( $_POST[ 'feature-gs5-beat1-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs5-beat2-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs5-beat2-textarea', ( $_POST[ 'feature-gs5-beat2-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs5-beat3-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs5-beat3-textarea', ( $_POST[ 'feature-gs5-beat3-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs5-beat4-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs5-beat4-textarea', ( $_POST[ 'feature-gs5-beat4-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs5-beat5-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs5-beat5-textarea', ( $_POST[ 'feature-gs5-beat5-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'feature-gs5-beat6-textarea' ] ) ) {
        update_post_meta( $post_id, 'feature-gs5-beat6-textarea', ( $_POST[ 'feature-gs5-beat6-textarea' ] ) );
    }
	
	// Checks for input and sanitizes/saves if needed
		if( isset( $_POST[ 'cta-guideservice-strong-intro' ] ) ) {
        update_post_meta( $post_id, 'cta-guideservice-strong-intro', ( $_POST[ 'cta-guideservice-strong-intro' ] ) );
    }
	
	// Checks for input and saves if needed
		if( isset( $_POST[ 'cta-guideservice-content' ] ) ) {
			update_post_meta( $post_id, 'cta-guideservice-content', $_POST[ 'cta-guideservice-content' ] );
		}	
	
}
add_action('save_post', 'sbm_guideservice_meta_save' );