$(document).ready(function()
{
    function UpdatePrice(price)
    {
        $('#total-price').html(parseFloat($('#total-price').html()) + price);
        $('#modalComanda .price').html(parseFloat($('#modalComanda .price').html()) + price);
    }

    function ClearFilter()
    {
        $('#filter-bar button').removeClass("btn-active");

        $('#products > .row div.hidden').removeClass("hidden");
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
        var template = $('#templates').children('.product');
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

    $('.btn-filter').on('click', function(){
        if ($(this).hasClass('btn-active'))
        {
            ClearFilter();
            return;
        }
        ClearFilter();
        var $currentButton = $(this);

        $(this).addClass('btn-active');
        $('#products > .row:first-child > div').each(function(index,value){
            if ($(this).attr('data-category') != $currentButton.attr('data-category'))
                $(this).addClass('hidden');
        });
    });

    $('#filter-search').on('keyup',function(){
        if ($(this).val() == '') 
        {
            $('#products > .row div.hidden').removeClass("hidden");
            return;
        }
        var $inputRef = $(this);

        $('#products > .row:first-child > div').each(function(index,value){
            if (!$(this).find('h4').text().toLowerCase().match("^" + $inputRef.val().toLowerCase()))
                $(this).addClass('hidden');
            else
                $(this).removeClass('hidden');
        });
    });

    $('#confirm-basket').on('click',function(){
        var currentCredit = parseFloat($('#total-credit').text());
        var totalPrice = parseFloat($('#total-price').text());
    })
    $('#basket-trigger-btn').on('click',function(){
        var $target = $('#modalComanda .row > div.col-md-5 > ol');
        $('#produse-in-cos .btn-group').each(function(index, value){
            var $name = $(this).find('.name');
            var $quantity = $(this).find('.quantity');

            $target.append('<li>' + $name.text() + ' x' + $quantity.text() + '</li>');
            //$target.append('<li>' +  i + ': ' + $name + ' x' + $quantity + '</li>');
        });
    });
});