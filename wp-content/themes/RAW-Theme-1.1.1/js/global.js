/**
 * Global JS file.
 *
 * @package Acronyms
 * @subpackage RAW
 * @since 1.0.0
 */

jQuery( document ).ready(
	function ($) {

		$( 'a.toggle-nav' ).on('click',
			function (e) {
				e.stopPropagation();
				e.preventDefault();

				console.log('this is it ' + $( this ).next().find('.menu').attr('class'));

				$( this ).next().find('.menu').slideToggle( 500 );
			}
		);

	}
);