( function( $ ) {

	$( function() {

		$( '.be-toggle-trigger' ).on( 'click', function( e ) {
			e.preventDefault();
			$( this ).toggleClass( 'active' ).next().slideToggle( 'fast' );
		} );

	} );

}( jQuery ) );
