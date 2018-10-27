if ( !( eventHandle = elemData.handle ) ) {
    eventHandle = elemData.handle = function( e ) {

        // Discard the second event of a jQuery.event.trigger() and
        // when an event is called after a page has unloaded
        return typeof jQuery !== "undefined" && jQuery.event.triggered !== e.type ?
            jQuery.event.dispatch.apply( elem, arguments ) : undefined;
    };
}