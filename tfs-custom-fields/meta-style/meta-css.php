<?php

 function load_tfs_custom_fields_css() {
	$css_custom_fields = '';
	if (is_page_template('page-templates/survey-template.php')) {
	 $survey_bg_color 							= get_post_meta( get_the_ID(), 'survey-background-color', true );
	 $survey_cont_border_color			= get_post_meta( get_the_ID(), 'survey-cont-border-color', true );
	 $survey_cont_bg_color					= get_post_meta( get_the_ID(), 'survey-cont-bg-color', true );
	 $survey_author_bg_color				= get_post_meta( get_the_ID(), 'survey-author-bg-color', true );
	 $survey_heading_color					= get_post_meta( get_the_ID(), 'survey-heading-color', true );
	 $survey_author_heading_color		= get_post_meta( get_the_ID(), 'survey-author-heading-color', true );
	 $survey_author_desc_color			= get_post_meta( get_the_ID(), 'survey-author-desc-color', true );

	 $css_custom_fields .= '
    
    #primary.survey-content-area.row {
    	background-color:' . $survey_bg_color . ';
    }
    #survey-entry-styles.entry-content.panel-body {
    	border: 20px solid '. $survey_cont_border_color .';
    	background-color:'. $survey_cont_bg_color .';
    }
    #survey-entry-styles h1,
    #survey-entry-styles h2,
    #survey-entry-styles h3,
    #survey-entry-styles h4,
    #survey-entry-styles h5 {
    	color: '. $survey_heading_color .';
    }
    .survey-author.well {
    	background-color: '. $survey_author_bg_color .';
    }
    #author-description h1,
    #author-description h2,
    #author-description h3,
    #author-description h4,
    #author-description h5 {
    	color: '. $survey_author_heading_color .';
    }
    #author-description .author_desc {
    	color: '. $survey_author_desc_color .';
    }
    #author-description .author_desc a:hover {
    	color: ' . $survey_author_desc_color . ';
    	opacity: 0.8;
    }
		
  ';

	 return $css_custom_fields;
	}
 }
