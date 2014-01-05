/*	*/
/***********************************************************************************
 * jQuery Adaptive parralax plugin v.1.3d                                          *
 * Created by wfoojjaec                                                            *
 * For any copyright issues one should contact author directly via gmail or skype. *
 ***********************************************************************************/
( function( $ ) {
	'use strict';
	$.fn.Aparallax = function() {
		if( $( this ).length > 0 )
			$( this ).each( function() {
				var jQuerythis = $( this );
				var windowWidth = $( window ).width();
				var windowHeight = $( window ).height();
				var elementWidth = jQuerythis.outerWidth();
				var elementHeight = jQuerythis.outerHeight();

				$( window ).resize( function() {
					windowWidth = $( window ).width();
					windowHeight = $( window ).height();
					elementWidth = jQuerythis.outerWidth();
					elementHeight = jQuerythis.outerHeight();
					update( Aparallax );
				} );

				var backgroundImage = $( '<div style="position : absolute; width : 0; height : 0; z-index : -1; overflow : hidden"><img src=' + jQuerythis.css( 'backgroundImage' ).replace( 'url(', '' ).replace( ')', '' ) + ' /></div>' );
				$( 'body' ).append( backgroundImage );
				var backgroundHeight = 0;
				var backgroundWidth = 0;
				backgroundImage.children().first().load( function() {
					backgroundWidth = backgroundImage.children().first().width();
					backgroundHeight = backgroundImage.children().first().height();
					backgroundImage.remove();
				} );
				$( window ).scroll( function() {
					update( Aparallax );
				} );
				$( window ).load( function() {
					update( Aparallax );
				} );
				function update( Aparallax ) {
					var windowScrollTop = $( window ).scrollTop();
					var elementOffsetTop = jQuerythis.offset().top;
					if( windowScrollTop < elementOffsetTop + elementHeight && windowScrollTop + windowHeight > elementOffsetTop && jQuerythis.hasClass( 'aparallax' ) ) {
						var offset;
						if( Aparallax === true || Aparallax === undefined ) {
							var ratio = ( jQuerythis.css( 'background-attachment' ) == 'fixed' ) ? windowWidth / backgroundWidth : elementWidth / backgroundWidth;
							if( windowScrollTop > elementOffsetTop + elementHeight || windowScrollTop + windowHeight < elementOffsetTop || backgroundHeight * ratio <= elementHeight )
								offset = 0;
							else {
								var after = Math.max( windowScrollTop + windowHeight - elementOffsetTop - elementHeight, 0 ) / windowHeight;
								var before = Math.min( ( windowScrollTop + windowHeight - elementOffsetTop ) / windowHeight, 1 );
								offset = - Math.floor( after + before / 2 * ( backgroundHeight * ratio - elementHeight ) );
							}
						}
						else
							offset = 0;
						jQuerythis.css( {
							'backgroundPosition' : 'center ' + offset + 'px'
						} );
					}
				}
				update();
			} );
	};
} )( jQuery );


