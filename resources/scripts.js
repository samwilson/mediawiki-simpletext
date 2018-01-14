( function ( mw, $ ) {

	/**
	 * Make File namespace page titles prettier by removing the prefix and suffix (and re-adding them on hover).
	 */
	var $firstHeading, pageName, prefixLength, extLength, titleLength, title, ext, $new;
	$firstHeading = $( 'body.ns-6 h1#firstHeading' );
	pageName = $firstHeading.text();
	prefixLength = pageName.indexOf( ':' );
	extLength = pageName.length - pageName.lastIndexOf( '.' );
	titleLength = pageName.length - prefixLength - extLength - 1;
	title = pageName.substr(prefixLength+1, titleLength);
	ext = pageName.substr(pageName.length - extLength);
	$new = $( "<span class='prefix'>File:</span><span class='title'>" + title + "</span><span class='ext'>" + ext + "</span>" );
	$firstHeading.html( $new );

}( mediaWiki, jQuery ) );
