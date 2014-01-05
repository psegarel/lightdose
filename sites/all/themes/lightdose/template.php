<?php

/**
 * @file
 * template.php
 */

function lightdose_preprocess_html(&$variables)
{
	// Adds Light Dose CSS
	$css_options = array(	'type'	=> 'external',
							'group'	=> CSS_THEME,
					);
	
	drupal_add_css('http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css' , $css_options);
	drupal_add_css( drupal_get_path('theme', 'lightdose').'/Gallery/css/blueimp-gallery.min.css' , array( 'type' => 'file', 'group' => CSS_THEME));
	
	// Adds Light Dose JS in the Footer area
	$js_options = array(	'type'	=> 'file',
							'group'	=> JS_THEME,
							'scope'	=> 'footer',
							'every_page' => TRUE
						);
						
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/helper-plugins/jquery.ba-throttle-debounce.min.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/helper-plugins/jquery.mousewheel.min.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/helper-plugins/jquery.touchSwipe.min.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/helper-plugins/jquery.transit.min.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/jquery.carouFredSel-6.2.1-packed.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/jquery.customSelect.min.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/masonry.pkgd.min.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/validate.min.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/Gallery/js/blueimp-gallery.min.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/user.js'  , $js_options);
	drupal_add_js( drupal_get_path('theme', 'lightdose').'/html/js/light-dose.js'  , $js_options);		
}
