( function( $ ) {

	$( function() {

		$( '.be-progressbar' ).waypoint( function() {

			$( '.be-progressbar' ).each( function() {
				$( this ).find( '.be-progressbar-bar' ).animate( {
					width: $( this ).attr( 'data-percent' )
				}, 1500 );
			} );

		}, {
			offset: 500
		} );

	} );

}( jQuery ) );

