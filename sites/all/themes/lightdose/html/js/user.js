var throttle = 200;
function loadMorePosts() {
	return $( '.post' ).eq( Math.floor( Math.random() * ( $( '.post' ).length + 1 ) ) ).clone();
}
$( window ).load( function() {
	$( 'img' ).each( function() {
		if( ! this.complete || typeof this.naturalWidth == 'undefined' || this.naturalWidth == 0 ) {
			this.src = "http://placehold.it/" + ( $( this ).attr( 'width' ) || this.width || ( ( typeof $( this ).naturalWidth == 'function' ) ? $( this ).naturalWidth() : false ) ) + 'x' + ( this.naturalHeight || $( this ).attr( 'height' ) || $( this ).height() );
		}
	} );
} );
