jQuery(function($){

    $(document).on('click', '.update-product-button', function(){


        var ID = $(this).attr('data-id');
    
    var form_data=JSON.stringify($(this).serializeObject());

    $.ajax({
        url: "http://test.com/update.php",
        type : "POST",
        contentType : 'application/json',
        data : form_data,
        success : function(result) {
        
            showRecords();
        },
        error: function(xhr, resp, text) {
            console.log(xhr, resp, text);
        }
    });

    return false;
});
});