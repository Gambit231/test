jQuery(function($){

    // показывать html форму при нажатии кнопки «Обновить товар» 
    $(document).on('click', '.update-product-button', function(){

        // получаем ID товара 
        var ID = $(this).attr('data-id');
    
    var form_data=JSON.stringify($(this).serializeObject());

    // отправка данных формы в API 
    $.ajax({
        url: "http://test.com/update.php",
        type : "POST",
        contentType : 'application/json',
        data : form_data,
        success : function(result) {
            // продукт был создан, возврат к списку продуктов 
            showRecords();
        },
        error: function(xhr, resp, text) {
            // вывод ошибки в консоль 
            console.log(xhr, resp, text);
        }
    });

    return false;
});
});