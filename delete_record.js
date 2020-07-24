jQuery(function($){

    $(document).on('click', '.delete-product-button', function(){
        var record_id = $(this).attr('data-id');
		alert(record_id);
			$.ajax({
				url: "http://test.com/delete.php",
				type : "POST",
				dataType : 'json',
				data : JSON.stringify({ ID: record_id }),
				success : function(result) 
						{
							showTable();
						},
      error: function(xhr, resp, text) 
			{
				console.log(xhr, resp, text);
			}
		});
    })
});