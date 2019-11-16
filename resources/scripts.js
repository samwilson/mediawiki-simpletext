( function ( mw, $ ) {

	/**
	 * Make File namespace page titles prettier by low-lighting the prefix and suffix.
	 */
	var $firstHeading, pageName, prefixLength, prefix, extLength, titleLength, title, ext, $new;
	$firstHeading = $( document.querySelector( 'header h1' ) );
	pageName = $firstHeading.text();
	prefixLength = pageName.indexOf( ':' );
	prefix = pageName.substr( 0, prefixLength + 1 );
	extLength = pageName.length - pageName.lastIndexOf( '.' );
	titleLength = pageName.length - prefixLength - extLength - 1;
	title = pageName.substr( prefixLength + 1, titleLength );
	ext = pageName.substr( pageName.length - extLength );
	$new = $( '<span class="prefix">' + prefix + '</span><span class="title">' + title + '</span><span class="ext">' + ext + '</span>' );
	$firstHeading.html( $new );

}( mediaWiki, jQuery ) );
