( function( api ) {

	// Extends our custom "web-developer-elementor" section.
	api.sectionConstructor['web-developer-elementor'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );