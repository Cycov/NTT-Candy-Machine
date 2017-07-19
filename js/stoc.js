$(document).ready(function(){
    var template = 
    {
        "id":0,
        "name":"",
        "quantity":0,
        "description":"",
        "category":"",
        "price":0.0
    }

    function isJson(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    }

    function clearAllFields(name)
    {
        $('#product-name').html(name);
        $('#product-rename').val('');
        $('.quantity.disabled').html(0);
        $('.quantity-product').attr('data-quantity',0);
        $('#product-description').val('');
        $('#product-category').val('none');
        $('#product-price').val(0.0);
    }

    var $prevEntry = $('li[data-id="1"]');
    var currentId = 0;

    $('.quantity-increase').on('click',function(){
        var parent = $(this).parent();
        $(parent).attr("data-quantity",parseFloat($(parent).attr("data-quantity")) + 1);
        $(parent).children(".quantity").html($(parent).attr("data-quantity"));
    });   
    $('.quantity-decrease').on('click',function(){
        var parent = $(this).parent();
        var quantity = parseInt($(parent).attr("data-quantity")) - 1;

        if (quantity < 0)
        {
            $(parent).click(false);         
            return;
        }

        $(parent).children(".quantity").html(quantity);
        $(parent).attr("data-quantity",quantity);
    });
    $('#products-in-stock').on('click','.product-entry',function(ev){
        $prevEntry.removeClass('selected');
        $(this).addClass('selected');
        $prevEntry = $(this);
        var unparsedData = $(this).children('span').html();

        if (!isJson(unparsedData))
        {
            console.error("Product data is not a valid json. (id: " + $(this).attr('data-id') + ' )');
            return;
        }

        var data = jQuery.parseJSON(unparsedData);
        $('#product-name').html(data.name);
        $('#product-rename').val(data.name);
        $('.quantity.disabled').html(data.quantity);
        $('.quantity-product').attr('data-quantity',data.quantity);
        $('#product-description').val(data.description);
        $('#product-category').val(data.category);
        console.log(data.category);
        $('#product-price').val(data.price);
        $(this).attr('data-id',data.id);
        currentId = data.id;
    });

    $prevEntry.trigger('click');
    $('#product-new-btn').on('click',function(){
        $('#products-in-stock').append('<li class="product-entry data-id="' + currentId + '">' +
        '<span style="display: none">' + template + '</span>' +
        '<a href="#">New product</a></li>');

        clearAllFields('New product');
    });

    //TODO: Add AJAX, eanble save btn;
});