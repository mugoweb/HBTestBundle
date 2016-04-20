jQuery(document).ready(function($) {

    jQuery('.view-more').on('click', function(){
        event.preventDefault();
        event.stopPropagation();
        updateHBTest( );
    });
    
});

function updateHBTest()
{
    $.ajax({
        type: "GET",
        url: '/hbtest/ajax',
        success: function(data){
            if( typeof data.error == 'undefined')
            {
                var source   = $("#hbtest_widget").html();
                var template = Handlebars.compile( source );
                var html    = template( data );
                jQuery( '.carousel' ).html( html );
            }
        },
        dataType: 'json'
    });
}