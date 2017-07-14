$(document).ready(function()
{
    function UpdatePrice(price)
    {
        $('#total-price').html(parseFloat($('#total-price').html()) + price);
    }


    $('#produse-in-cos').on('click','.quantity-increase',function(ev)
    {
        var parent = $(this).parent();
        $(parent).attr("data-quantity",parseFloat($(parent).attr("data-quantity")) + 1);
        $(parent).children(".quantity").html($(parent).attr("data-quantity"));
        UpdatePrice(parseFloat($(parent).attr("data-price")));
    });
    
    $('#produse-in-cos').on('click','.quantity-decrease',function(ev)
    {
        var parent = $(this).parent();
        var quantity = parseInt($(parent).attr("data-quantity")) - 1;


        UpdatePrice(parseFloat($(parent).attr("data-price")) * (-1));
        if (quantity == 0)
        {
            $(parent).click(false);
            $(parent).fadeOut(500, function() { $(this).remove(); });            
            return;
        }

        $(parent).children(".quantity").html(quantity);
        $(parent).attr("data-quantity",quantity);
    });

    $('.product-thumbnail').on('click',function()
    {
        var template = $('#templates').children('#product');
        var price = $(this).attr('data-price');

        $(template).children(".bascket-product").children('.name').html(
            $(this).attr('data-name')
        );
        $(template).children(".bascket-product").attr({
            'data-price': price,
            'data-quantity': 1
        });

        $('#produse-in-cos').append($(template).html());
        UpdatePrice(parseFloat(price));
    });
});