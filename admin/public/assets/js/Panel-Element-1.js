$(function(){
    
    
})

var loadSensors = function() {
    
   
    
}

var searchSensors = function() {
    
     // FILTER CHART
    $('#input-filter-devices').bind('keyup', function() {
   
        var searchString = $(this).val();

        $("ul li").each(function(index, value) {

            currentName = $(value).text()
            if( currentName.toUpperCase().indexOf(searchString.toUpperCase()) > -1) {
                $(value).show();
            } else {
                $(value).hide();
            }

        });

    });
    // FILTER END
    
}