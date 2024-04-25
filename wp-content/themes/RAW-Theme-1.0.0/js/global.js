/**
 * Global JS file.
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

jQuery( document ).ready(
	function ($) {

		$( '.toggle-nav' ).click(
			function (e) {
				$( this ).next().slideToggle( 500 );

				e.preventDefault();
			}
		);

	}
);